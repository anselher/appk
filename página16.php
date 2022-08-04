<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page19</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv2.22.css" rel="stylesheet">
<link href="página16.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function()
{
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {$('#preloader').remove();}
});
$(window).on('load', function()
{
   $('#preloader').remove();
});
</script>
</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:630px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="Html1" style="position:absolute;left:0px;top:0px;width:630px;height:360px;z-index:1">
<head><meta http-equiv="cache-control" content="max-age=0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
<meta http-equiv="pragma" content="no-cache">
        <!-- <link href="//dds3f6ghl5s0e.cloudfront.net/streaming/css/videojs-7.3.0/video-js.min.css" rel="stylesheet"> -->
        <link href="https://dds3f6ghl5s0e.cloudfront.net/streaming/css/videojs-7.20.1/video-js.min.css" rel="stylesheet">
        <link href="https://dds3f6ghl5s0e.cloudfront.net/streaming/css/videojs/videojs-dvrseekbar.css" rel="stylesheet">
        <link href="https://dds3f6ghl5s0e.cloudfront.net/streaming/css/videojs-7.3.0/videojs-hls-quality-selector.css" rel="stylesheet">

        <!-- <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
        <script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://cdn.segment.com/analytics.js/v1/f8Y7AAvDL6dF7GiY9Thb4pFU9kmRimQD/analytics.min.js"></script><script src="//dds3f6ghl5s0e.cloudfront.net/streaming/js/jquery.min.js"></script>
        <!-- <script src="https://static.medimoz.com/mz-events/1.8.0/mz-events.min.js"></script> -->
        <script src="//dds3f6ghl5s0e.cloudfront.net/streaming/js/handlebars.js"></script>
        <!-- <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs-7.3.0/video.min.js"></script>
        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs-7.3.0/videojs-http-streaming.min.js"></script> -->

        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs-7.20.1/video.min.7.20.1.js"></script>
        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs-7.20.1/videojs-http-streaming.js"></script>

        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs/videojs-dvrseekbar.min.js"></script>

        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs-contrib-quality-levels.js"></script>
        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/videojs-hls-quality-selector.js"></script>

        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/aes.js"></script>
        <script src="https://dds3f6ghl5s0e.cloudfront.net/streaming/js/player.js"></script>

        <!-- Firebase-->
        <!-- <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script> -->


        <!-- <script>document.write("<script type='text/javascript' src='js/player.js?v=" + Date.now() + "'><\/script>");</script>    -->
<!--        <script>document.write("<script type='text/javascript' src='//dds3f6ghl5s0e.cloudfront.net/streaming/js/player.js?v=" + Date.now() + "'><\/script>");</script> -->  

        <script>
            var dataId = getParameterByName("dataId");
            var type = getParameterByName("type");
            var playerId = getParameterByName("playerId");
            var regularAdminId = getParameterByName("regularAdminId");            
            var resellerId = getParameterByName("resellerId");  
            var userId = getParameterByName("userId");
            var isFromLiveResellerPages = getParameterByName("isFromLiveResellerPages");
            var deviceId = getParameterByName("deviceId");

            if(isValidObject(resellerId) == false){
                resellerId = regularAdminId;
            }

            if(isValidObject(userId) == false){
                userId = null;
            }

            if(isValidObject(isFromLiveResellerPages) == false){
                isFromLiveResellerPages = false;
            }

            if(isValidObject(deviceId) == false){
                deviceId = null;
            }

            if(isValidObject(dataId) && isValidObject(type) && isValidObject(playerId)){
                initPlayer(playerId, type, dataId, resellerId, userId, isFromLiveResellerPages, deviceId);
            } else{
                alert("Can't find all url parameters")
            }

            function getParameterByName(name) {
                try {
                    var url = window.location.href;
                    url = url.split("?");
                    if(url[1].indexOf("playerId") >= 0){
                        return getNotEncrypted(name)
                    }
                    else{
                        var decrypted = CryptoJS.AES.decrypt(url[1], "5Y;WhLLj;q~K6{9q");
                        url = "?" + decrypted.toString(CryptoJS.enc.Utf8)

                        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                        results = regex.exec(url);
                        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
                    }
                } catch (error) {
                    console.log(error)
                    return getNotEncrypted(name)
                }
            }

            function getNotEncrypted(name) {
                var url = window.location.href;
                url = url.split("?");
                   console.log(url)
                var decrypted = url[1];
                url = "?" + decrypted
             
                name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(url);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            function isValidObject(obj){
                 if(obj == "" || obj == undefined || obj == null || obj == "undefined" || obj == "null"){
                    return false;
                 }
                 return true;
            }
        </script>   
    </head>

<iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%" frameborder="0" scrolling="no" allowfullscreen="" src="https://ott.streann.com/streaming/player.html?U2FsdGVkX18h3z4crjABxhYHo9PGt7gA1nTc+e2CoFsSLdgEYZV7bS1bYqTZUdpHJ/EC4+Nbom5F0RPe+9oTF5Q485SWCTe5bt2JyU6rE9QF8E+GtfnoY4iH/0mlGOOtrMTnd/4CY3iz0B8bMrNOdbjidaU9NKibqMSbZznwfQbRcQNBpY9qT8KLTt51CzMbG+CaZ9GS/KIAysrO697ODSJXRAXr/IfRUhqRi3o0l9gD+1mBqkBUL0PwTVODCYiYTJ2+d91RwSm2jJ5vCASFr7JEKmBCLWr7fLEwcCh7qgdHlLVwc/VJlBuLFtKJIOLxB4pCdAisvIsMwOoz3fEr4g=="></iframe></div>
<div id="preloader"></div>
</body>
</html>