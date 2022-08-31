<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NTN 24</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
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
#preloader
{
   background: #FFFFFF url("images/windmill.gif") no-repeat center center;
   bottom: 0;
   opacity: 0.39;
   position: fixed;
   top: 0;
   width: 100%;
   z-index: 99999;
}
</style>
<link href="plyr.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300,400&display=swap" rel="stylesheet">
<link href="vrtv.css?v=239" rel="stylesheet">
<style>
#YouTube1
{
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   border-width: 0;
}
#wb_YouTube1
{
   background-color: #000000;
   overflow: hidden !important;
   position: fixed !important;
   left: 0 !important;
   top: 0 !important;
   width: 100% !important;
   height: 100% !important;
}
#wb_YouTube1
{
   --plyr-color-main: #4169E1;
}
</style>
<script src="jquery-3.6.0.min.js"></script>
<script src="plyr.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
var playerYouTube1;
function onYouTubeIframeAPIReady() {
   playerYouTube1 = new YT.Player('YouTube1', {
      events: {
      }
   });
}
</script>
<script>
$(document).ready(function()
{
   function resizeYouTube() 
   {
      var ratio = 16/9;
      var widthViewPort = $(window).width();
      var heightViewPort = $(window).height();
      var width, height;
      var $player = $('#YouTube1');
      if (widthViewPort / ratio < heightViewPort)
      {
         width = Math.ceil(heightViewPort * ratio);
         $player.width(width).height(heightViewPort).css({left: (widthViewPort - width) / 2, top: 0});
      }
      else
      {
         height = Math.ceil(widthViewPort / ratio);
         $player.width(widthViewPort).height(height).css({left: 0, top: (heightViewPort - height) / 2});
      }
   }
   $(window).on('resize', function() 
   {
      resizeYouTube();
   })
   resizeYouTube();
   const plyrYouTube1 = new Plyr('#wb_YouTube1', {loadSprite: false, iconUrl: 'plyr.svg'});
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {$('#preloader').remove();}
});
$(window).on('load', function()
{
   $('#preloader').remove();
});
</script>
<body onload="window.open('info-channel','InlineFrameInfoChannel');window.open('logo-channel-index','InlineFrameLogoChannel');window.open('./images/status-channel/status-vod-activ','InlineFrameStatusVod');window.open('./images/status-channel/status-live-inact','InlineFrameStatusLive');document.getElementById('menumasterplayer').style.display='none';document.getElementById('menumasterplayer2').style.display='none';document.getElementById('wb_BreadcrumbMenuCentral').style.display='block';return false;">

</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:760px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_YouTube1" style="position:absolute;left:0px;top:0px;width:726px;height:407px;z-index:1;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/KXGZ4I60QXc?rel=0&amp;loop=1&amp;playlist=KXGZ4I60QXc&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=0?t=37"></iframe>
</div>
<div id="preloader"></div>
</body>
</html>