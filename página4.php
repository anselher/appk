<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Venezolana de Televisión</title>
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
<link href="plyr.css" rel="stylesheet">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv3.2.3.css?v=124" rel="stylesheet">
<style>
#FlexGrid1
{
   display: grid;
   background-color: transparent;
   background-image: none;
   border: 0px solid #CCCCCC;
   box-sizing: border-box;
   margin: 0;
   padding: 0;
   font-size: 0px;
   grid-template-columns: 1fr 1fr 1fr 1fr;
   grid-template-rows: 358px 3px 28px;
   grid-template-areas:
      "header header header header"
      "main main main main"
      "footer footer footer footer";
}
#FlexGrid1 .header
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
#FlexGrid1 .main
{
   display: flex;
   grid-area: main;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   padding: 0;
   -webkit-flex-direction: row;
   flex-direction: row;
   -webkit-flex-wrap: wrap;
   flex-wrap: wrap;
   -webkit-justify-content: flex-start;
   justify-content: flex-start;
   -webkit-align-items: center;
   align-items: center;
   -webkit-align-content: center;
   align-content: center;
}
#FlexGrid1 .footer
{
   display: flex;
   grid-area: footer;
   background-color: transparent;
   background-image: none;
   border: 0px solid #FFFFFF;
   border-radius: 0px;
   padding: 0;
   -webkit-flex-direction: row;
   flex-direction: row;
   -webkit-flex-wrap: wrap;
   flex-wrap: wrap;
   -webkit-justify-content: center;
   justify-content: center;
   -webkit-align-items: center;
   align-items: center;
   -webkit-align-content: center;
   align-content: center;
}
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
   display: block;
   position: relative;
   margin: 0;
   height: 360px;
   vertical-align: top;
}
#wb_YouTube1
{
   --plyr-color-main: #7FFF00;
}
#wb_CssMenu1
{
   border: 0px solid #C0C0C0;
   background-color: transparent;
   margin: 0;
   text-align: left;
}
#wb_CssMenu1 ul
{
   list-style-type: none;
   margin: 0;
   padding: 0;
}
#wb_CssMenu1 li
{
   float: left;
   margin: 0;
   padding: 0px 0px 0px 0px;
   width: 100%;
}
#wb_CssMenu1 a
{
   display: block;
   float: left;
   color: #333333;
   border: 0px solid #CCCCCC;
   background-color: #FFFFFF;
   background-color: rgba(255,255,255,0.05);
   background-image: none;
   font-family: "Barlow Condensed";
   font-weight: 500;
   font-size: 13px;
   font-style: normal;
   text-decoration: none;
   width: 100%;
   box-sizing: border-box;
   height: 28px;
   padding: 0px 5px 0px 5px;
   vertical-align: middle;
   line-height: 28px;
   text-align: center;
}
#wb_CssMenu1 li:hover a, #wb_CssMenu1 a:hover
{
   color: #FFFFFF;
   border: 0px solid #00FF7F;
   background-color: #337AB7;
   background-image: none;
}
#wb_CssMenu1 li.firstmain
{
   padding-left: 0px;
}
#wb_CssMenu1 li.lastmain
{
   padding-right: 0px;
}
#wb_CssMenu1 br
{
   clear: both;
   font-size: 1px;
   height: 0;
   line-height: 0;
}
#CssMenu1 li i
{
   font-size: 13px;
   margin-right: 3px;
   width: 15px;
}
#wb_CssMenu1
{
   position: absolute;
   left: 0px;
   top: 361px;
   width: 628px;
   height: 28px;
   z-index: 3;
}
#wb_uid0
{
   position: absolute;
   left: 630px;
   top: 0px;
   margin: 0;
   border-width: 0;
   z-index: 250;
}
#wb_YouTube1
{
   display: inline-block;
   width: 100%;
   z-index: 0;
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
<div id="FlexGrid1">
<div class="header">
<div id="wb_YouTube1">
<iframe id="YouTube1" src="https://www.dailymotion.com/embed/video/x8arg1d?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="main">
</div>
<div class="footer">
</div>
</div>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" id="wb_uid0" width="16" height="16"></a>
<nav id="wb_CssMenu1">
<ul id="CssMenu1" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link" href="javascript:window.location.reload()" target="_self"><i class="fa fa-refresh">&nbsp;</i></a>
</li>
</ul>
</nav>
</body>
</html>