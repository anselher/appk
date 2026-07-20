# Cloud Playout System — Restauración Rápida

## Pasos para poner en funcionamiento (3 comandos)

```bash
# 1. Extraer el zip
unzip cloud-playout-clean.zip -d /home/z/my-project/

# 2. Instalar dependencias + sincronizar BD
cd /home/z/my-project
bun install
bun run db:push

# 3. Arrancar el servidor
bun run dev
```

**Verificar:**
- http://localhost:3000/ → Viewer (TV en vivo)
- http://localhost:3000/admin → Admin (clic en "Avances" en el sidebar)

## Regenerar videos de prueba (opcional, ~5 min)

Los videos NO están incluidos en el zip (pesan 323MB). Se regeneran con:

```bash
# Generar 15 videos sintéticos cortos + descargar 8 de fuentes públicas
bash scripts/seed-short-clips-v2.sh

# Sembrar 3 Avances demo con assets locales
bun run scripts/reseed-avances-local.ts

# Programar los Avances en la parrilla de hoy
bun run scripts/seed-avance-slots-today.ts

# Sembrar telemetría demo para el dashboard
curl -X POST http://localhost:3000/api/telemetry/seed-demo
```

## Qué incluye este zip (2.8MB)

| Carpeta/Archivo | Tamaño | Descripción |
|---|---|---|
| `src/` | 1.2MB | Código fuente completo (Next.js 16 + React 19 + TypeScript) |
| `db/custom.db` | 14MB | SQLite con datos demo (assets, avances, schedule, telemetría) |
| `prisma/schema.prisma` | 28KB | Esquema: Asset, Avance, AvanceClip, RenderedAvance, ScheduleSlot, etc. |
| `scripts/` | 116KB | Seeds y utilidades (regeneran videos, avances, telemetría) |
| `public/` | 12KB | Logo SVG + robots.txt |
| Config files | ~340KB | package.json, bun.lock, tsconfig, tailwind, etc. |
| `uploads/` | vacío | Estructura de carpetas (originals/, assets/, renders/) — se llena con los seeds |

## Qué NO incluye (se regenera)

| Item | Tamaño | Cómo regenerar |
|---|---|---|
| `node_modules/` | 1.2GB | `bun install` |
| `.next/` | 654MB | `bun run dev` (automático) |
| `uploads/originals/` | 161MB | `bash scripts/seed-short-clips-v2.sh` |
| `uploads/assets/` | 104MB | Generado por el script anterior (HLS transcodificados) |
| `uploads/renders/` | 58MB | Auto-generado al programar Avances en la parrilla |

## Características implementadas

### Módulo Bloque Avance (Avance Programático)
- Contenedor multiprograma con N clips (cualquier categoría)
- Editor de corte lineal por clip (In/Out con auto-clamp + frame-accurate)
- Switch "Ocultar en EPG" (ghost-with-weight)
- Fade in/out configurable (0-1000ms, default 500ms)
- Vigencia (fecha inicio/fin)
- APIs REST independientes (/api/avances, /api/avances/[id]/clips/...)

### Editor de Corte (ClipCutEditor)
- Barra de transporte: ⏮ ⏪ ▶/⏸ ⏩ ⏭ + velocidad (0.25x-2x)
- Timeline combinado: scrubber + IN/OUT en una sola barra
- Botones flotantes [In / Out] que siguen al playhead
- Frame-accurate marking (pausedAtMsRef captura el frame exacto del pause)
- Atajos: Space (play), ←→ (±5s), I/O (marcar), Shift+←→ (ir a IN/OUT)
- Display con milisegundos: MM:SS.mmm
- Manejo de errores: timeout 8s + botón reintentar + badge Local/Remoto

### Renderizado de Avances a MP4
- Modelo RenderedAvance (Prisma) con status: pending→rendering→completed|failed|stale
- ffmpeg concat + trim + fade + scale normalization (1280×720)
- Auto-render al programar Avance en la parrilla
- Invalidación automática al editar Avance o modificar clips
- Cron de cleanup (borra renders expirados)
- Playout engine usa render MP4 (1 segmento, sin gaps) o fallback a clips
- UI: badge de estado + botón Render/Re-render + progress bar en módulo Avances

### Reproductor MAM (AssetPreviewDialog)
- Reproductor completo en la sección Medios (MAM)
- Transport bar: ⏮ ⏪ ▶ ⏩ ⏭ + volumen + velocidad + fullscreen
- Seekbar con range requests (seek en MP4)
- Badge Local/Remoto + manejo de timeout/error

### Viewer (TV en vivo)
- EPG lateral con formato 12h AM/PM (sin segundos)
- Broadcast ticker inferior
- Fade in/out overlay (requestAnimationFrame)
- Ghost-with-weight: Avance oculto no aparece en EPG pero empuja al siguiente programa
- "Viéndolo Ahora" muestra clip individual durante Avances ocultos

### Schedule Grid (Parrilla)
- Botón unificado "Añadir" → picker: Programa / Bumper / Avance
- Slots tipo Avance con borde violeta + badge
- Validación anti-colisión de orderIndex (max+1 con retry)
- Drag-and-drop para reordenar

### Estructura de archivos clave

```
src/
├── app/
│   ├── page.tsx                    # Viewer (TV en vivo)
│   ├── admin/page.tsx              # Admin shell
│   └── api/
│       ├── playout/route.ts        # Playout state (usa renders si existen)
│       ├── avances/                # CRUD Avances + clips + render
│       ├── renders/                # Lista + cleanup de renders
│       ├── schedule/route.ts       # Parrilla (auto-render al agregar Avance)
│       ├── media/[...path]/        # Sirve HLS + MP4 con range requests
│       └── ...
├── components/
│   ├── viewer/                     # Video player, EPG, ticker
│   └── admin/
│       ├── avances.tsx             # Módulo Avances (lista + editor + render badges)
│       ├── clip-cut-editor.tsx     # ⭐ Editor de corte con timeline unificado
│       ├── asset-preview-dialog.tsx # Reproductor MAM
│       ├── schedule-grid.tsx       # Parrilla con botón "Añadir" unificado
│       ├── media-library.tsx       # MAM con botón Previsualizar
│       └── ...
├── lib/
│   ├── playout.ts                  # Engine: buildTimeline, buildEpg, placeAvanceBlock
│   ├── render.ts                   # ffmpeg render pipeline + cleanup
│   ├── ffmpeg.ts                   # Transcodificación HLS
│   ├── types.ts                    # Interfaces (Asset, Avance, RenderedAvance, etc.)
│   └── ...
└── prisma/
    └── schema.prisma               # Modelos: Asset, Avance, AvanceClip, RenderedAvance, ...
```

## Para continuar el desarrollo

El proyecto está completo y funcional. Posibles mejoras futuras:
- Preloading del siguiente segmento en el viewer (eliminar gaps programa→avance)
- Transcodificar renders a HLS multi-bitrate (para ABR en el viewer)
- Persistir FPS en el modelo Asset para cortes frame-accurate
- UI de gestión de renders (lista, borrar manualmente, re-renderizar lote)
