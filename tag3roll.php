<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>menuppal</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body
{
   background-color: transparent;
   color: #000000;
   font-family: "Barlow Condensed";
   font-weight: 400;
   font-weight: 500;
   font-size: 13px;
   line-height: 1.1875;
   margin: 0;
   padding: 0;
}
a
{
   color: #F2F2F2;
   text-decoration: none;
}
a:visited
{
   color: #FFFFFF;
}
a:active
{
   color: #FFFF00;
}
a:hover
{
   color: #00FF00;
   text-decoration: none;
}
input:focus, textarea:focus, select:focus
{
   outline: none;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300,400&display=swap" rel="stylesheet">
<link href="vrtv.css?v=315" rel="stylesheet">
<style>
#page2FlexGrid1
{
   display: grid;
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   box-sizing: border-box;
   margin: 0;
   padding: 0px 1px 0px 1px;
   font-size: 0px;
   grid-template-columns: 1fr;
   grid-template-rows: 161px;
   grid-template-areas:
      "header";
}
#page2FlexGrid1 .header
{
   display: flex;
   grid-area: header;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   padding: 0;
   -webkit-flex-direction: row;
   flex-direction: row;
   -webkit-flex-wrap: wrap;
   flex-wrap: wrap;
   -webkit-justify-content: space-around;
   justify-content: space-around;
   -webkit-align-items: center;
   align-items: center;
   -webkit-align-content: center;
   align-content: center;
}
</style>
<script src="jquery-3.6.0.min.js"></script>
<script src="./build/iscroll.js"></script>
<script src="./src/demoUtils.js"></script>
<script>
var myScroll;

function loaded () {
	myScroll = new IScroll('#wrapper', { scrollX: true, scrollY: false, mouseWheel: false });
}

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, isPassive() ? {
	capture: false,
	passive: false
} : false);

</script>



<style>
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

html {
	-ms-touch-action: none;
}

body,ul,li {
	padding: 0;
	margin: 0;
	border: 0;
}

body {
	font-size: 10px;
	font-family: ubuntu, helvetica, arial;
	overflow: hidden; /* this is important to prevent the whole page to bounce */
}

#header {
	position: absolute;
	z-index: 2;
	top: 0;
	left: 0;
	width: 100%;
	height: 0px;
	line-height: 0px;
	background: transparent;
	padding: 0;
	color: #eee;
	font-size: 8px;
	text-align: center;
	font-weight: bold;
}

#footer {
	position: absolute;
	z-index: 2;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 0px;
	background: #444;
	padding: 0;
	border-top: 0px solid #444;
}

#wrapper {
	position: absolute;
	z-index: 1;
	top: 1px;
	bottom: 1px;
	left: 0;
	width: 100%;
	background: transparent;
	overflow: hidden;
}

#scroller {
	position: absolute;
	z-index: 1;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	width: 1050px;
	height: 100%;
	background-color: #444;
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-text-size-adjust: none;
	-moz-text-size-adjust: none;
	-ms-text-size-adjust: none;
	-o-text-size-adjust: none;
	text-size-adjust: none;
}

#scroller ul {
	list-style: none;
	padding: 0;
	margin: 0;
	width: 100%;
	height: 100%;
	text-align: center;
}

#scroller li {
	display: block;
	float: left;
	width: 131px;
	height: 100%;
	border-right: 1px solid #575748;
	background: linear-gradient(to bottom, #30302f 0%, #2a2a29 100%);
	font-size: 14px;
}
.imgskills {
      border: 1px #fff solid;

      padding: 0px px 0px 0px;
      margin-left: 0px;
      margin-top: 8px;
   height: 82px;
      border-radius: 55px;
      border-top: 1px solid #494948;
      border-right: 1px solid #808080;
      border-left: 1px solid #494948;
      border-bottom: 1px solid #808080;
      object-fit: cover;
}
//*           aspect-ratio: 4/3; width: 114px;height: 82px;*//
</style>
<script type= "text/javascript">/*<![CDATA[*/
$(function(){
	//Get our elements for faster access and set overlay width
	var div = $('div.sc_menud'),
		ul = $('ul.sc_menud'),
		ulPadding = 1;
	//Get menu width
	var divWidth = div.width();

	//Remove scrollbars	
	div.css({overflow: 'hidden'});
	
	//Find last image container
	var lastLi = ul.find('li:last-child');
	
	//When user move mouse over menu
	div.mousemove(function(e){
		//As images are loaded ul width increases,
		//so we recalculate it each time
		var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;	
		var left = (e.pageX - div.offset().left) * (ulWidth-divWidth) / divWidth;
		div.scrollLeft(left);
         });
});
/*]]>*/</script>
</head>
<body onload="loaded()">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:1077px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="page2FlexGrid1">
<div class="header">
<div id="page2Html1" style="display:inline-block;width:1049px;height:160px;z-index:0">
<div id="header"></div>
<div id="wrapper">
	<div id="scroller">
		<ul>
      <li><a href="estudio" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('comedycentral','_top');return false;"><img src="./images/servicio-alquiler_estudio.png" alt="ALQUILER DE ESTUDIO" class="imgskills" >
      <h5><br><br>ALQUILER DE ESTUDIO</h5><span></span></a></li>
      <li><a href="produccion" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('universaltv','_top');return false;"><img src="./images/servicio-produccion.png" alt="PRODUCCION" class="imgskills" >
      <h5><br><br>PRODUCCIÓN</h5><span></span></a></li>
      <li><a href="contex" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('warnerchannel','_top');return false;"><img src="./images/servicio-copiado.png" alt="CONTENIDO EXCLUSIVO" class="imgskills" >
      <h5><br><br>CONTENIDO EXCLUSIVO</h5><span></span></a></li>
      <li><a href="agenciamed" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tnt','_top');return false;"><img src="./images/servicio-unidad_negocios_especiales.png" alt="AGENCIA CENTRAL DE MEDIOS" class="imgskills" >
      <h5><br><br>AGENCIA DE MEDIOS</h5><span></span></a></li>
      <li><a href="grabacion" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('axn','_top');return false;"><img src="./images/servicio-grabacion.png" alt="GRABACION" class="imgskills" >
      <h5><br><br>GRABACIÓN</h5><span></span></a></li>
      <li><a href="postproduccion" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('fx','_top');return false;"><img src="./images/servicio-post_produccion.png" alt="POST-PRODUCCION" class="imgskills" >
      <h5><br><br>POST-PRODUCCIÓN</h5><span></span></a></li>
      <li><a href="graficacion" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('space','_top');return false;"><img src="./images/servicio-graficacion.png" alt="GRAFICACIÓN" class="imgskills" >
      <h5><br><br>DISEÑO GRÁFICO</h5><span></span></a></li>
      <li><a href="pauta" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tbs','_top');return false;"><img src="./images/servicio-pauta_telemdellin.png" alt="PAUTA" class="imgskills" >
      <h5><br><br>PAUTA</h5><span></span></a></li>     
		</ul>
	</div>
</div>

<div id="footer"></div></div>
</div>
</div>
</body>
</html>