<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page19</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv2.22.css" rel="stylesheet">
<link href="vh1play.css" rel="stylesheet">
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
<script src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/dash-shaka-playback@latest/dist/dash-shaka-playback.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js"></script>

</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:630px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
    <div id="player"></div>
    <script charset="utf-8">
        window.onload = function () {
            var onBeforeLoad = function (shaka_player) {
                shaka_player.getNetworkingEngine().registerRequestFilter(function (type, request) {
                    if (type == 2) { // shaka.net.NetworkingEngine.RequestType.LICENSE
                        // do something
                    }
                });
                shaka_player.getNetworkingEngine().registerResponseFilter(function (type, response) {
                    if (type == 2) { // shaka.net.NetworkingEngine.RequestType.LICENSE
                        // do something
                    }
                });
            }

            var player = new Clappr.Player({
                parentId: '#player', autoPlay: true,
                plugins: [LevelSelector, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback, Clappr.MediaControl],
                shakaConfiguration: {
                manifest: {retryParameters: {maxAttempts: Infinity}},
                streaming: {retryParameters: {maxAttempts: Infinity}},
                drm: {retryParameters: {maxAttempts: Infinity}},
                    preferredAudioLanguage: 'es-VE',
                    streaming: {
                        rebufferingGoal: 5
                    }
                },
                shakaOnBeforeLoad: onBeforeLoad,
                //source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd?format=mp4&session_id=25020', //LIVE
                source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd', //multi audio, sub
                //source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd', //VOD multiple qualities
                //source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd', //SUB
                //source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd', //VOD multiple audios
                //source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd', //VOD subtitle
                //source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd', //4K
                // for more examples go to: http://dashif.org/reference/players/javascript/v1.5.1/samples/dash-if-reference-player/index.html and https://shaka-player-demo.appspot.com/
                height: 355,
                width: 630
            })
        }
    </script>
<div id="preloader"></div>
</body>
</html>