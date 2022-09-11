<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
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
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300,400&display=swap" rel="stylesheet">
<link href="vrtv.css?v=169" rel="stylesheet">
<style>
#Banner1
{
   background-color: #DCDCDC;
   background-image: none;
   border: 0px solid #0963AD;
   border-radius: 0px;
   color: #4F4F4F;
   font-family: "Barlow Condensed";
   font-weight: 500;
   font-style: normal;
   font-size: 9.3px;
   text-align: left;
   margin: 0;
}
#Banner1 span
{
   display: block;
   height: 9.3px;
   margin: 2px 0px 2px 5px;
}
/* BANNER CAMBIANTE
----------------------------------------------- */
#rotator {
border: 0px solid #000000;
overflow: hidden;
margin: 0px ;
padding:0px;
position: relative;
width: 728 px;
height: 90 px;
}
#rotator img {
width: 728 px;
height: 90 px;
border: 0;
margin: 0;
padding: 0;
}
</style>
<script>
//<![CDATA[
/*****
Image Cross Fade Redux
Version 1.0
Last revision: 02.15.2006
steve@slayeroffice.com
Please leave this notice intact.
*****/

window.addEventListener?window.addEventListener('load',so_init,false):window.attachEvent('onload',so_init);
var d=document, imgs = new Array(), zInterval = null, current=0, pause=false;
function so_init() {
if(!d.getElementById || !d.createElement)return;
css = d.createElement('link');
css.setAttribute('href','slideshow2.css');
css.setAttribute('rel','stylesheet');
css.setAttribute('type','text/css');
d.getElementsByTagName('head')[0].appendChild(css);
imgs = d.getElementById('rotator').getElementsByTagName('img');
for(i=1;i<imgs.length;i++) imgs[i].xOpacity = 0;
imgs[0].style.display = 'block';
imgs[0].xOpacity = .99;
setTimeout(so_xfade,6000); }
function so_xfade() {
cOpacity = imgs[current].xOpacity;
nIndex = imgs[current+1]?current+1:0;
nOpacity = imgs[nIndex].xOpacity;
cOpacity-=.05;
nOpacity+=.05;
imgs[nIndex].style.display = 'block';
imgs[current].xOpacity = cOpacity;
imgs[nIndex].xOpacity = nOpacity;
setOpacity(imgs[current]);
setOpacity(imgs[nIndex]);
if(cOpacity<=0) {
imgs[current].style.display = 'none';
current = nIndex;
setTimeout(so_xfade,6000);}
else {
setTimeout(so_xfade,50);
}
function setOpacity(obj) {
if(obj.xOpacity>.99) {
obj.xOpacity = .99;
return; }
obj.style.opacity = obj.xOpacity;
obj.style.MozOpacity = obj.xOpacity;
obj.style.filter = 'alpha(opacity=' + (obj.xOpacity*100) + ')';
}
}
//]]>
</script>


<script>
function disableIE() {
    if (document.all) {
        return false;
    }
}
function disableNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which==2 || e.which==3) {
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = disableNS;
} 
else {
    document.onmouseup = disableNS;
    document.oncontextmenu = disableIE;
}
document.oncontextmenu=new Function("return false");
</script>
<script src="blockadblock-blocker.tapermonkey.js"></script>

</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:712px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="rotator">
<a href="publicidad/1" rel="nofollow noopener noreferrer sponsored ugc" target="" title="movistarnegociosmgt" onclick="window.open('https://linktr.ee/movistarnegociosmgt','InlineFrameSidebar2');return false;"><img src="./images/bannermovistar1.gif"></a>
<a href="publicidad/1" rel="nofollow noopener noreferrer sponsored ugc" target="" title="movistarnegociosmgt" onclick="window.open('linktreevuvb','InlineFrameSidebar2');return false;"><img src="./images/bannervenbra1.gif"></a>
<a href="publicidad/1" rel="nofollow noopener noreferrer sponsored ugc" target="" title="movistarnegociosmgt" onclick="window.open('https://www.instagram.com/proyexconsca/','');return false;"><img src="./images/banneradsproyexconsca2.gif"></a>
<a href="publicidad/1" rel="nofollow noopener noreferrer sponsored ugc" target="" title="movistarnegociosmgt" onclick="window.open('https://linktr.ee/movistarnegociosmgt','InlineFrameSidebar2');return false;"><img src="./images/bannermovistar2.gif"></a>
<a href="publicidad/1" rel="nofollow noopener noreferrer sponsored ugc" target="" title="" onclick="window.open('universalchannelplay5','InlineFrameScreen');return false;"><img src="./images/banneradsgeorgina1.gif"></a>
<a href="publicidad/1" rel="nofollow noopener noreferrer sponsored ugc" target="" title="" onclick="window.open('comedycentralplay2','InlineFrameScreen');return false;"><img src="./images/banneradsproyexconsca1.gif"></a>
</div>
<div id="Banner1" style="position:absolute;left:649px;top:0px;width:80px;height:16px;z-index:2"><span>PATROCINANTES:</span></div>


</body>
</html>