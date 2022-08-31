<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>France 24 en Español</title>
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
</style>
<link href="plyr.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300,400&display=swap" rel="stylesheet">
<link href="vrtv.css?v=203" rel="stylesheet">
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
<script src="jquery-ui.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
var playerYouTube1;
function onYouTubeIframeAPIReady() {
   playerYouTube1 = new YT.Player('YouTube1', {
      events: {
         'onStateChange': onStateChangeYouTube1
      }
   });
}
function onStateChangeYouTube1(event) {
   switch(event.data) {
      case 3:
         Toggle('wb_YouTube1', 'pulsate', 500);
         break;
   }
}
</script>
<script src="wwb17.min.js"></script>
<script>
$(document).ready(function()
{
   const plyrYouTube1 = new Plyr('#wb_YouTube1', {loadSprite: false, iconUrl: 'plyr.svg'});
});
</script>
</head>
<body>
<div id="wb_YouTube1" style="position:absolute;left:0px;top:0px;width:729px;height:410px;z-index:0;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/XDJPzMznAjU?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=0subject=France24"></iframe>
</div>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:805px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
</body>
</html>