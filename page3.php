<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NTN 24</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="plyr.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv2.22.css" rel="stylesheet">
<link href="page3.css" rel="stylesheet">
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
</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:631px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_YouTube1" style="position:absolute;left:0px;top:0px;width:628px;height:353px;z-index:1;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/R21-rMSnGA8?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=0"></iframe>
</div>
<div id="preloader"></div>
</body>
</html>