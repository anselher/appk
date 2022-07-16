<!doctype html>
<html 


>
<head>
<meta charset="utf-8">
<title>menu2</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="menu_doc.css" rel="stylesheet">
<title>iScroll demo: key bindings</title>
<script src="./build/iscroll.js"></script>
<script src="demoUtils.js"></script>
<script>
var myScroll;
function loaded () {
	myScroll = new IScroll('#wrapper', { keyBindings: true });
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, isPassive() ? {
	capture: false,
	passive: false
} : false);
</script>

</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:240px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<!-- menu_documentales -->
<div id="Html3" style="display:inline-block;width:182px;height:389px;z-index:0">
<body onload="loaded()">
    <div id="headermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(1)'), null, null, true)">&#9650;</a></div>
    
    <div id="wrapper">
        <div id="scroller">
            <ul>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('discoverysci', '_top'); "><img src="https://content.osn.com/bob/745x419/SCI.jpg?w=100&h=60&crop=1"/><h5> DISCOVERY SCI</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('thehistory', '_top'); "><img src="https://telefullenvivo.com/logos/historylatino.png?w=100&h=60&crop=1"><h5> THE HISTORY<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('thehistory-2', '_top'); "><img src="https://telefullenvivo.com/logos/history2.png?w=100&h=60&crop=1"><h5> THE HISTORY 2<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('discoverychannel', '_top'); "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyMA2VMKZ1IUYtOzP2aTC7Fnl6KRfVCSycaGCF_Z7g9rn1HPxb2ZyV4rqmcCXCaxiIU8A&usqp=CAU?w=100&h=60&crop=1"><h5> DISCOVERY CHANNEL<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('nationalgeographic', '_top'); "><img src="https://img.interempresas.net/fotos/2729372.png?w=100&h=60&crop=1"><h5> NATIONAL GEOGRAPHIC<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('dmax', '_top'); "><img src="https://i.ytimg.com/vi/YSwEHQSWJfk/maxresdefault.jpg"><h5> DMAX<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('discoveryhomeandhealth', '_top'); "><img src="https://www.totalmedios.com/img/noticias/2020/02/5e57a80383fcf__838x390.jpg"><h5> DISCOVERY H&H<h5></a></li>
            </ul>
        </div>
    </div>
    
    <div id="footermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(10)'), null, null, true)">&#9660;</a></div>
    
</body></div>

</div>
</div>
</div>
</div>
</body>
</html>