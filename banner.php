<script src="blockadblock-blocker.tapermonkey.js"></script><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="banner.css" rel="stylesheet">
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

</head>
<body /* BANNER CAMBIANTE
----------------------------------------------- */
#rotator {
border: 0px solid #000000;
overflow: hidden;
margin: 0px ;
padding:0px;
position: relative;
width: 628px;
height: 78px;
}
#rotator img {
width: 628px;
height: 78px;
border: 0;
margin: 0;
padding: 0;
}>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:630px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="FlexGrid1">
<div class="header">
<div id="rotator">
<a href="#"><img alt="Título" src="./images/images/Recurso18xhdpi.jpg" /></a>
<a href="#"><img alt="Título" src="./images/images/Recurso19xhdpi.jpg" /></a>
<a href="#"><img alt="Título" src="./images/images/Recurso20xhdpi.jpg" /></a>
<a href="#"><img alt="Título" src="./images/images/iwish.png" /></a>
</div>
</div>
</div>
</body>
</html>