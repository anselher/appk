<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>menuppal</title>
<meta name="robots" content="noindex, nofollow">
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
<link href="vrtv.css?v=252" rel="stylesheet">
<style>
#wb_LayoutGrid1
{
   clear: both;
   position: relative;
   table-layout: fixed;
   display: table;
   text-align: center;
   width: 100%;
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   box-sizing: border-box;
   margin: 0;
}
#LayoutGrid1
{
   box-sizing: border-box;
   padding: 0px 15px 0px 15px;
   margin-right: auto;
   margin-left: auto;
}
#LayoutGrid1 > .row
{
   margin-right: -15px;
   margin-left: -15px;
}
#LayoutGrid1 > .row > .col-1
{
   box-sizing: border-box;
   font-size: 0px;
   min-height: 1px;
   padding-right: 15px;
   padding-left: 15px;
   position: relative;
}
#LayoutGrid1 > .row > .col-1
{
   float: left;
}
#LayoutGrid1 > .row > .col-1
{
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   width: 100%;
   text-align: left;
}
#LayoutGrid1:before,
#LayoutGrid1:after,
#LayoutGrid1 .row:before,
#LayoutGrid1 .row:after
{
   display: table;
   content: " ";
}
#LayoutGrid1:after,
#LayoutGrid1 .row:after
{
   clear: both;
}
@media (max-width: 480px)
{
#LayoutGrid1 > .row > .col-1
{
   float: none;
   width: 100% !important;
}
}
</style>
<script>
function disableIE() {
    if (document.all) {
        return false;
    }
}
function disableNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which==2 || e.which==3) {
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = disableNS;
} 
else {
    document.onmouseup = disableNS;
    document.oncontextmenu = disableIE;
}
document.oncontextmenu=new Function("return false");
</script><title>iScroll demo: key bindings</title>
<script src="./build/iscroll.js"></script>
<script src="./build/iscroll-infinite.js"></script>
<script src="./build/iscroll-lite.js"></script>
<script src="./build/iscroll-probe.js"></script>
<script src="./build/iscroll-zoom.js"></script>
<script src="./src/core.js.js"></script>
<script src="./src/close.js.js"></script>
<script src="./src/open.js"></script>
<script src="./src/utils.js"></script>




<script>
var myScroll;
function loaded () {
	myScroll = new IScroll('#wrapper', { keyBindings: false, mouseWheel: false, scrollbars: false, scrollX: false, scrollY: true,});
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, isPassive() ? {
	capture: false,
	passive: false
} : false);
</script>

<style>
*{-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}

textarea{font-family:inherit;font-size:inherit;line-height:inherit}a:focus,a:hover{color:#23527c;text-decoration:none}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}


.no-select {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
#headermenu {
	position: absolute;
	z-index: 2;
	top: 0;
	left: 0;
	width: 100%;
	height: 20px;
	line-height: 20px;
	background: #444;
	padding: 0;
	color: #eee;
	font-size: 16px;
	text-align: center;
	font-weight: bold;
}
#wrapper {
	position: absolute;
	top: 20px;
	bottom: 20px;
	left: 0;
	width: 100%;
	background: transparent;
	overflow: hidden;
    z-index: 1;
}
#scroller {
	position: absolute;
	z-index: 1;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	width: 100%;
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

}
.imgmenu {
   float:left;
   vertical-align:top;
   aspect-ratio: 4/3;
   padding: 0 0px;
   margin-left: 5px;
   margin-top: 5px;
   margin-right: 10px;
   width: 76px;
   height: 48px;
   border-radius: 5px;
   border-bottom: 1px solid #ccc;
   border-top: 1px solid #4d4d4d;
   border-left: 1px solid #808080;
   border-right: 1px solid #808080;
   object-fit: cover;
}
#scroller li {
	padding: 0 0px;
	vertical-align:middle;
	height: 60px;
	margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
	line-height: 10px;
	text-align: left;
	font-size: 10px;
	border-bottom: 1px solid #808080;
	border-top: 1px solid #494948;
	background: linear-gradient(to bottom, #30302f 0%, #2a2a29 100%);
}

#footermenu {
	position: absolute;
	z-index: 2;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 20px;
	background: #444;
	padding: 0;
	border-top: 1px solid #444;
	font-size: 16px;
	font-color: #fff;
	text-align: center;
	font-weight: bold;
}
</style>

</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:337px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">

<!-- menu_noticias -->
<div id="Html1" style="display:inline-block;width:161px;height:460px;z-index:1">
<body onload="loaded()">
    <div id="headermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(1)'), null, null, true)">&#9650;</a></div>
    <div id="wrapper">
        <div id="scroller">
            <ul>
                <li><a href="canal/ntn24" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('noticieroinsularplay','InlineFrameScreen');return false;"><img src="./images/noti.gif" class="imgmenu"><br><h5>NOTICIERO INSULAR</h5><br><h6>Noticias</h6></a></li>
                <li><a href="canal/cnn" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('cnn-en-espanol','_top');return false;"><img src="./images/villarosa1.gif" class="imgmenu"><br><h5>CALLES Y VEREDAS</h5><br><h6>Social</h6></a></li>
                <li><a href="canal/meridianotv" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('meridianotv','_top');return false;"><img src="./images/5m-wessolosky.gif" class="imgmenu"><br><h5>5 MINUTOS CON WESSOLOSKY</h5><br><h6>Opinión</h6></a></li>
                <li><a href="canal/globovision" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('globovision','_top');return false;"><img src="./images/nardafe.gif" class="imgmenu"><br><h5>CAMINOS DEL DESTINO</h5><br><h6>Astrología</h6></a></li>
                <li><a href="canal/vpitv" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('sidebar-asisinintro','InlineFrameSidebar2');return false;"><img src="./images/asi.gif" class="imgmenu"><br><h5>ASÍ, SIN INTRO</h5><br><h6>Social</h6></a></li>
                <li><a href="canal/telesurtv" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('telesurtv','_top');return false;"><img src="./images/musico.gif" class="imgmenu"><br><h5>ELMUSICÓLOGO</h5><br><h6>Música</h6></a></li>
                <li><a href="canal/rtnoticias" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('cinemaprimeplay','InlineFrameScreen');return false;"><img src="./images/cine.gif" class="imgmenu"><br><h5>CINEMAPRIME</h5><br><h6>Cine</h6></a></li>
           </ul>
        </div>
    </div>
    <div id="footermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(7)'), null, null, true)">&#9660;</a></div>
</body>

<body onload="window.open('info-channel','InlineFrameInfoChannel');window.open('logo-channel-index','InlineFrameLogoChannel');window.open('./images/flags/flag-venezuela','InlineFrameFlags');window.open('./images/status-channel/status-live','InlineFrameStatusLive');document.getElementById('menumasterplayer').style.display='none';document.getElementById('menumasterplayer2').style.display='none';document.getElementById('wb_BreadcrumbMenuCentral').style.display='block';return false;"></div>
</div>
</div>
</div>
</div>
</body>
</html>