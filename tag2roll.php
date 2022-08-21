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
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv3.2.3.css?v=221" rel="stylesheet">
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
#wb_uid0
{
   position: absolute;
   left: 1038px;
   top: 0px;
   margin: 0;
   border-width: 0;
   z-index: 250;
}
#page2Html1
{
   display: inline-block;
   width: 1027px;
   height: 161px;
   z-index: 0;
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
	border-top: 1px solid #444;
}

#wrapper {
	position: absolute;
	z-index: 1;
	top: 1px;
	bottom: 1px;
	left: 2;
	width: 1027px;
	background: transparent;
	overflow: hidden;
}

#scroller {
	position: absolute;
	z-index: 1;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	width: 2000px;
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
	width: 100px;
	height: 100%;
	border-right: 1px solid #575748;
	background: linear-gradient(to bottom, #30302f 0%, #2a2a29 100%);
	font-size: 14px;
}
.imgcanal {
      border: 1px #fff solid;
      aspect-ratio: 16/9;
      padding: 0px px 0px 0px;
      margin-left: 0px;
      margin-top: 8px;
      width: 84px;
      height: 62px;
      border-radius: 5px;
      border-top: 1px solid #494948;
      border-right: 1px solid #808080;
      border-left: 1px solid #494948;
      border-bottom: 1px solid #808080;
      object-fit: cover;
}

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
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" id="wb_uid0" width="16" height="16"></a>
<div id="page2FlexGrid1">
<div class="header">
<div id="page2Html1">
<div id="header"></div>
<div id="wrapper">
	<div id="scroller">
		<ul>
      <li><a href="canal/comedycentral" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('comedycentral','_top');return false;"><img src="https://i.ytimg.com/vi/xPPMqwl3iyM/maxresdefault.jpg" alt="C.Central" class="imgcanal" >
      <h5><br><br>COMEDY CENTRAL</h5><span></span></a></li>
      <li><a href="canal/universalTV" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('universaltv','_top');return false;"><img src="https://variety.com/wp-content/uploads/2013/08/universal-logo.jpg?w=100&h=60&crop=1" alt="Universal" class="imgcanal" >
      <h5><br><br>UNIVERSAL TV</h5><span></span></a></li>
      <li><a href="canal/warner" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('warnerchannel','_top');return false;"><img src="https://laguia.tv/_nuxt/img/WarnerChannel_256.7d1fbc1.png" alt="Warner" class="imgcanal" >
      <h5><br><br>WARNER CHANNEL</h5><span></span></a></li>
      <li><a href="canal/tnt" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tnt','_top');return false;"><img src="https://www.tvenserio.com/wp-content/uploads/2020/03/tnt01.jpg" alt="tnt" class="imgcanal" >
      <h5><br><br> TNT</h5><span></span></a></li>
      <li><a href="canal/axn" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('axn','_top');return false;"><img src="https://observatoriodatv.uol.com.br/wp-content/uploads/2017/04/AXN-%C3%A9-o-canal-mais-assistido-pelas-mulheres-em-2017.jpg" alt="AXN" class="imgcanal" >
      <h5><br><br>AXN</h5><span></span></a></li>
      <li><a href="canal/fx" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('fx','_top');return false;"><img src="https://i.ytimg.com/vi/qAPk90TKDL4/mqdefault.jpg" alt="fx" class="imgcanal" >
      <h5><br><br>FX</h5><span></span></a></li>
      <li><a href="canal/space" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('space','_top');return false;"><img src="https://www.adlatina.com/uploads/img/fotoNoticiaG26988.jpg" alt="space" class="imgcanal" >
      <h5><br><br>SPACE</h5><span></span></a></li>
      <li><a href="canal/tbs" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tbs','_top');return false;"><img src="https://i.pinimg.com/736x/7a/2c/a2/7a2ca2c72f7d0e7ad2a1d5a58d7188fe.jpg" alt="tbs" class="imgcanal" >
      <h5><br><br>TBS</h5><span></span></a></li>
      <li><a href="canal/studiouniversal" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('studiouniversal','_top');return false;"><img src="https://style.shockvisual.net/wp-content/uploads/2019/10/studio-universal.jpg" alt="studio U" class="imgcanal" >
      <h5><br><br>STUDIO UNIVERSAL</h5><span></span></a></li>
      <li><a href="canal/history" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('history','_top');return false;"><img src="https://i2.wp.com/telaviva.com.br/wp-content/uploads/2022/02/history-e-history-2.png?fit=564%2C295&ssl=1" alt="history" class="imgcanal" >
      <h5><br><br>HISTORY</h5><span></span></a></li>
      <li><a href="canal/discovery" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('discovery','_top');return false;"><img src="https://i.ytimg.com/vi/A4W3fRjJJTY/maxresdefault.jpg" alt="discovery" class="imgcanal" >
      <h5><br><br>DISCOVERY</h5><span></span></a></li>
      <li><a href="canal/star" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('starchannel','_top');return false;"><img src="https://i0.wp.com/television.com.py/wp-content/uploads/2021/02/StarChannelTVPY.jpg?fit=84%2C60&ssl=1" alt="star" class="imgcanal" >
      <h5><br><br> STAR CHANNEL</h5><span></span></a></li>
      <li><a href="canal/tooncast" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('tooncast','_top');return false;"><img src="https://1.bp.blogspot.com/-JKfvFJqmM8A/YJrkaoEkAII/AAAAAAAAQUc/0ziuLKXuWwcJj_WCRwpDoYMUYlZiL15fgCPcBGAYYCw/s0/Tooncast_1.jpg" alt="tooncast" class="imgcanal" >
      <h5><br><br>TOONCAST</h5><span></span></a></li>
      <li><a href="canal/cartoonnetwork" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('cartoonnetwork','_top');return false;"><img src="https://bolavip.com/__export/1637447079281/sites/bolavip/img/2021/11/20/cartoon_crop1637446533759.jpg_242310155.jpg" alt="cartoon network" class="imgcanal" >
      <h5><br><br>CARTOON NETWORK</h5><span></span></a></li>
      <li><a href="canal/nick" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('nick','_top');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Nick.svg/2560px-Nick.svg.png" alt="nick" class="imgcanal" >
      <h5><br><br>NICK</h5><span></span></a></li>
      <li><a href="canal/sony" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('sony','_top');return false;"><img src="https://www.thedailytelevision.com/sites/default/files/notas/imagenes/interior/sonny_channel_programa_vbig.jpg" alt="canal sony" class="imgcanal" >
      <h5><br><br>CANAL SONY</h5><span></span></a></li>
      <li><a href="canal/cinecanal" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('cinecanal','_top');return false;"><img src="https://www.totalmedios.com/img/noticias/2018/09/5b965cd2a443c__838x390.jpg" alt="cinecanal" class="imgcanal" >
      <h5><br><br>CINECANAL</h5><span></span></a></li>
      <li><a href="canal/theepochtime" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('the-epoch-time','InlineFrameScreen');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Epochtimeslogo.jpg" alt="" class="imgcanal" >
      <h5><br><br> THE EPOCH TIMES</h5><span></span></a></li>
      <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('televenplay','InlineFrameScreen');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Epochtimeslogo.jpg" alt="" class="imgcanal" >
      <h5><br><br> TLO</h5><span></span></a></li>
      <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('televenplay','InlineFrameScreen');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Epochtimeslogo.jpg" alt="" class="imgcanal" >
      <h5><br><br> TLO</h5><span></span></a></li>
      <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('televenplay','InlineFrameScreen');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Epochtimeslogo.jpg" alt="" class="imgcanal" >
      <h5><br><br> TLO</h5><span></span></a></li>
      <li><a href="canal/promocional" rel="nofollow noopener noreferrer sponsored ugc" target="InlineFrameScreen" title="" onclick="window.open('televenplay','InlineFrameScreen');return false;"><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Epochtimeslogo.jpg" alt="" class="imgcanal" >
      <h5><br><br> TLO</h5><span></span></a></li>
		</ul>
	</div>
</div>

<div id="footer"></div></div>
</div>
</div>
</body>
</html>