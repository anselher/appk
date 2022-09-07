<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEVEVISION | TELEVEN</title>
<meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
<style>
body
{
   background-color: #000000;
   color: #F2F2F2;
   font-family: "Barlow Condensed";
   font-weight: 400;
   font-weight: 400;
   font-size: 13px;
   line-height: 1.1;
   margin: 0;
   padding: 0;
}
a
{
   color: #0000FF;
   text-decoration: none;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: none;
}
input:focus, textarea:focus, select:focus
{
   outline: none;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
<link href="fullscreen2.css?v=368" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js"></script><style>
*{-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}

#InlineframeScreen
{
   display: -webkit-flex;
   display: flex;
   position: relative;
   height: 100%;
   padding: 1px 1px 1px 321px;
   -webkit-flex-direction: row;
   flex-direction: row;
   -webkit-flex-wrap: wrap;
   flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   justify-content: flex-start;
   -webkit-align-items: flex-start;
   align-items: flex-start;
   -webkit-align-content: flex-start;
   align-content: flex-start;
   margin: 0;
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   box-sizing: border-box;
   font-size: 0px;
}
#InlineframeScreen
{
   -webkit-flex-grow: 0;
   flex-grow: 0;
   -webkit-flex-shrink: 0;
   flex-shrink: 0;
   -webkit-align-self: auto;
   align-self: auto;
}


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
	width: 320px;
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
	width: 320px;
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
	width: 320px;
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
<script src="jquery-3.6.0.min.js"></script>
<script src="./build/iscroll.js"></script>
<script src="./src/demoUtils.js"></script>

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


</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:0px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<!-- grid -->
<body onload="loaded()">
    <div id="headermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(1)'), null, null, true)">&#9650;</a></div>
    <div id="wrapper">
        <div id="scroller">
            <ul>
                <li><a href="canal/tves" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tves','_top');return false;"><img src="https://www.vtv.gob.ve/wp-content/uploads/2021/05/tvez1-800x445.jpg" class="imgmenu"><br><h5>TVES</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('venevision','_top'); "><img src="https://i.ytimg.com/vi/xvSLuXFWUGQ/hqdefault_live.jpg?w=120&h=60&crop=1"class="imgmenu"><br><h5>VENEVISIÓN</h5></a></li>
                <li><a href="canal/france24" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('vtv', '_top');return false;"><img src="https://s1.dmcdn.net/v/SZNmq1Ve3YFARIK5d/x240" class="imgmenu"><br><h5>VTV</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('televen','_top'); "><img src="https://talcualdigital.com/wp-content/uploads/2018/02/2-92.jpg" class="imgmenu"><br><h5>TELEVEN</h5></a></li>
                <li><a href="" rel="nofollow noopener noreferrer sponsored ugc" target="" title="" onclick="window.open('canali','_top');return false;"><img src="https://i.ytimg.com/vi/mV2G_CYsDHo/hqdefault.jpg" class="imgmenu"><br><h5>CANAL I</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('promartv', '_top'); "><img src="http://corpoweb.net.ve/promar/images/programas/brujula/img3.jpg" class="imgmenu"><br><h5>PROMAR TV<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('tlt', '_top'); "><img src="https://i.ytimg.com/vi/zRaaaJsIGog/hqdefault.jpg?sqp=-oaymwEjCPYBEIoBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLDObERo6j-qVvcEB3iyBodLgXxhiw" class="imgmenu"><br><h5>TLT LA TELE TUYA TV</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('tvo', '_top'); "><img src="https://i.ytimg.com/vi/jUsG3PzpUtk/mqdefault.jpg" class="imgmenu"><br><h5>TVO</h5></a></li>
                <li><a href="canal/vepaco" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('vepacotv','_top');return false;"><img src="https://vepaco.com/wp-content/uploads/2020/11/vepacotv2.jpg" class="imgmenu"><br><h5>VEPACO TV</h5></a></li>
                <li><a href="canal/catatumbo" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('catatumbotv','_top');return false;"><img src="https://www.televisiongratis.tv/components/com_televisiongratis/images/catatumbo-televisin-1551.jpg" class="imgmenu"><br><h5>CATATUMBO TV</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('multivision', '_top'); "><img src="https://tse1.mm.bing.net/th?&id=OVP.dKAZeKyqHgls6uqKmRWe0wHgFo&w=330&h=186&c=7&pid=1.7&rs=1" class="imgmenu"><br><h5>MULTIVISION FEDERAL</h5></a></li>
                <li><a href="canal/france24" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('france24','_top');return false;"><img src="https://i.ytimg.com/vi/lU8u1hEW8Ms/hqdefault.jpg" class="imgmenu"><br><h5>FRANCE 24</h5></a></li>
                <li><a href="canal/euronews" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('euronews','_top');return false;"><img src="https://i.ytimg.com/vi/JbKgQhFlMdU/hqdefault_live.jpg" class="imgmenu"><br><h5>EURONEWS</h5></a></li>
                <li><a href="canal/dwenespanol" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('dw','_top');return false;"><img src="https://i.ytimg.com/vi/RTjbYKBB828/hqdefault_live.jpg" class="imgmenu"><br><h5>DW EN ESPAÑOL</h5></a></li>
                <li><a href="canal/caracol" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('noticiascaracol','_top');return false;"><img src="http://caracol-brightspot.s3.amazonaws.com/70/00/2aae258a4a4985c641a2c6e8d987/noticias-caracol.jpg" class="imgmenu"><br><h5>NOTICIAS CARACOL</h5><br><h6>Noticias</h6></a></li>
                <li><a href="canal/c5n" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('c5nnoticias','_top');return false;"><img src="https://i.ytimg.com/vi/bCJY83loEr4/hqdefault.jpg" class="imgmenu"><br><h5>C5N NOTICIAS</h5></a></li>
                <li><a href="canal/cgtn" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('cgtnenespanol','_top');return false;"><img src="https://i.ytimg.com/vi/zghho0FINAk/hqdefault.jpg" class="imgmenu"><br><h5>CGTN EN ESPAÑOL</h5></a></li>
                <li><a href="canal/rtve" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('rtvenoticias','_top');return false;"><img src="https://i.ytimg.com/vi/xR-4NDFsYNk/hqdefault_live.jpg" class="imgmenu"><br><h5>RTVE NOTICIAS</h5></a></li>
                <li><a href="canal/meganoticias" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('meganoticias','_top');return false;"><img src="https://i.ytimg.com/vi/WWVwv31dlLg/hqdefault_live.jpg" class="imgmenu"><br><h5>MEGANOTICIAS</h5></a></li>
                  <li><a href="canal/rtnoticias" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('rtnoticias','_top');return false;"><img src="./images/rtespanol.gif" class="imgmenu"><br><h5>RT EN ESPAÑOL</h5><br><h6>Noticias</h6></a></li>
                <li><a href="canal/tnnoticias" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tnnoticias','_top');return false;"><img src="https://i.ytimg.com/vi/wHn1_QVoXGM/hqdefault_live.jpg" class="imgmenu"><br><h5>TN NOTICIAS</h5></a></li>
                <li><a href="canal/evtv" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('evtv','_top');return false;"><img src="https://i.ytimg.com/vi/ZAEhwK4szd4/mqdefault.jpg" class="imgmenu"><br><h5>EVTV MIAMI</h5></a></li>
                <li><a href="canal/theepochtime" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('the-epoch-time','_top');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Epochtimeslogo.jpg" class="imgmenu"><br><h5>THE EPOCH TIMES</h5></a></li>
                <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('cnn-en-espanol','_top');return false;"><img src="./images/cnn.gif" class="imgmenu"><br><h5>CNN EN ESPAÑOL</h5></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('universaltv','_top');return false;"><img src="https://th.bing.com/th/id/OIP.CB3xtPURm1dVKXFv3hpIlwAAAA?pid=ImgDet&w=180&h=180&rs=1" class="imgmenu"><br><h5>UNIVERSAL TV</h5><br><h6>Series</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('comedycentral','_top');return false;"><img src="./images/ccentral.gif" class="imgmenu"><br><h5>COMEDY CENTRAL</h5><br><h6>Stand Up Comedy</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('warnerchannel','_top');return false;"><img src="./images/warner.gif" class="imgmenu"><br><h5>WARNER CHANNEL</h5><br><h6>Series</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tnt','_top');return false;"><img src="./images/tnt.gif" class="imgmenu"><br><h5>TNT</h5><br><h6>Cine</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tntseries','_top');return false;"><img src="./images/tntseries.gif" class="imgmenu"><br><h5>TNT</h5><br><h6>Series</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('axn','_top');return false;"><img src="./images/axn.gif" class="imgmenu"><br><h5>AXN</h5><br><h6>Series</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tbs','_top');return false;"><img src="./images/tbs.gif" class="imgmenu"><br><h5>TBS</h5><br><h6>Series</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('history','_top');return false;"><img src="./images/history.gif" class="imgmenu"><br><h5>HISTORY</h5><br><h6>Documentales</h6></a></li>
               <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('history2','_top');return false;"><img src="./images/history2.gif" class="imgmenu"><br><h5>HISTORY 2</h5><br><h6>Documentales</h6></a></li>
               
            </ul>
        </div>
    </div>
    <div id="footermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(19)'), null, null, true)">&#9660;</a></div>
</body>



<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:0px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<!-- InlineframeScreen -->
<div id="InlineframeScreen" style="position:absolute;left:0px;top:0px;width:100%;height:5px;z-index:6">
    <script type='text/javascript' src='https://maindigitalstream.com/jwplayer/jwplayer.js?2.2.3.5'></script>
<script>jwplayer.key="8gDDWtjPpyFgSWsZPjDk4MV6CVI0wEVf2xp7vS7FZUw=";</script><div id='MediaPlayerOverview'>Loading&#8230;</div>
<script type='text/javascript'>
  jwplayer('MediaPlayerOverview').setup({
 sources: [
     {file: "https://cloud.streamingconnect.tv/hls/televen/televenmoviles.m3u8"},
   {file: "https://cloud.streamingconnect.tv/hls/televen/televenmoviles.m3u8"}
    ],
 rtmp: {
  bufferlength: 3,
 },
 'autostart': 'true',
 'aspectratio': '3:2',
 'width': '100%',
 'height': '100%',
 'fallback': false,
 'androidhls': true,
 'primary': 'html5',
 logo: {
  file: './logo.png', //watermark image path
  link: '', //link url on watermark image
  position: 'top-left' //position of watermark on player
  },
 });
</script></div>
</body>
</html>