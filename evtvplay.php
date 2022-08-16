<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page21</title>
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
<link href="365tv3.2.3.css?v=52" rel="stylesheet">
<style>
#YouTube1
{
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   border-width: 0;
   -webkit-animation: animate-fade-in 1000ms linear 0ms 1 normal both;
   animation: animate-fade-in 1000ms linear 0ms 1 normal both;
}
#wb_YouTube1
{
   --plyr-color-main: #00B3FF;
}
#wb_uid0
{
   position: absolute;
   left: 896px;
   top: 0px;
   margin: 0;
   border-width: 0;
   z-index: 250;
}
#wb_YouTube1
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
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" id="wb_uid0" width="16" height="16"></a>
<div id="wb_YouTube1">
<iframe id="YouTube1" src="https://www.youtube.com/embed/sUcp0Xeoeog?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;controls=0&amp;autohide=1" loading="lazy"></iframe>
</div>
<div id="preloader"></div>
</body>
</html>