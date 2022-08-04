<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dwframe</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="plyr.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv2.22.css" rel="stylesheet">
<link href="test.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="plyr.min.js"></script>
<script>
$(document).ready(function()
{
   const plyrMediaPlayer1 = new Plyr('#MediaPlayer1', {loadSprite: false, iconUrl: 'plyr.svg'});
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {$('#preloader').remove();}
});
$(window).on('load', function()
{
   $('#preloader').remove();
});
</script>
<script src="https://player2.h-cdn.com/hola_player.js?customer=demo"></script>


</head>
<body>
<video preload="auto" autoplay="1" class="video-js vjs-default-skin" width="630" height="360" controls>
    <source src="https://dwamdstream104.akamaized.net/hls/live/2015530/dwstream104/index.m3u8" type="application/x-mpegurl">
</video>

<script>
    (function(){
        window.hola_player();
    })();
</script>
<div id="space"><br></div>
<div id="container">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:628px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_MediaPlayer1" style="position:absolute;left:0px;top:0px;width:540px;height:303px;z-index:1;">
<video id="MediaPlayer1" autoplay controls preload="auto" playsinline>
<source src="https://limited38.todostreaming.es/live/101tv-web101tv.m3u8">
</video>
</div>
<div id="wb_Vimeo1" style="position:absolute;left:0px;top:303px;width:540px;height:300px;z-index:2;">
<iframe id="Vimeo1" src="https://player.vimeo.com/video/76979871?autopause=1&autoplay=1&byline=1&color=00adef&portrait=1&title=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>
</div>
<div id="preloader"></div>
</body>
</html>