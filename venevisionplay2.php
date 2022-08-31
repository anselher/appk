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
<link href="vrtv.css?v=218" rel="stylesheet">
<style>
#YouTube1
{
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   border-width: 0;
}
#wb_YouTube1
{
   --plyr-color-main: #7FFF00;
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
   const plyrYouTube1 = new Plyr('#wb_YouTube1', {loadSprite: false, iconUrl: 'plyr.svg'});
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {$('#preloader').remove();}
});
$(window).on('load', function()
{
   $('#preloader').remove();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js"></script>



</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:865px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_YouTube1" style="position:absolute;left:0px;top:0px;width:729px;height:410px;z-index:1;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/x3ez7JK8Usk?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=0"></iframe>
</div>
<div id="preloader"></div>
</body>
</html>