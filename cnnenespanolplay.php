<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CNN en Español</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
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
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv3.2.3.css?v=125" rel="stylesheet">
<style>
#YouTube11
{
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   border-width: 0;
}
#wb_YouTube11
{
   background-color: #000000;
   overflow: hidden !important;
   position: fixed !important;
   left: 0 !important;
   top: 0 !important;
   width: 100% !important;
   height: 100% !important;
}
#wb_YouTube11
{
   --plyr-color-main: #FF0000;
}
#wb_uid0
{
   position: absolute;
   left: 798px;
   top: 0px;
   margin: 0;
   border-width: 0;
   z-index: 250;
}
#wb_YouTube11
{
   position: absolute;
   left: 0px;
   top: 0px;
   width: 729px;
   height: 410px;
   z-index: 1;
}
</style>
<script src="jquery-3.6.0.min.js"></script>
<script src="plyr.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
var playerYouTube11;
function onYouTubeIframeAPIReady() {
   playerYouTube11 = new YT.Player('YouTube11', {
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
      var $player = $('#YouTube11');
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
   const plyrYouTube11 = new Plyr('#wb_YouTube11', {loadSprite: false, iconUrl: 'plyr.svg'});
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {$('#preloader').remove();}
});
$(window).on('load', function()
{
   $('#preloader').remove();
});
</script>
</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" id="wb_uid0" width="16" height="16"></a>
<div id="wb_YouTube11">
<iframe id="YouTube11" src="https://www.youtube.com/embed/1k3gt11THz4?rel=0&amp;autoplay=1&amp;enablejsapi=1&amp;autohide=0"></iframe>
</div>
<div id="preloader"></div>
</body>
</html>