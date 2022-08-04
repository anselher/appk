<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page19</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv2.22.css" rel="stylesheet">
<link href="page9.css" rel="stylesheet">
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
<div id="Html1" style="position:absolute;left:0px;top:0px;width:630px;height:355px;z-index:1">
<div id="player"></div>
    <script>
      var player = new Clappr.Player(
        {
          source: 'https://cetl.cdn.rcs.net.ar/mnp/h2/output.mpd',
          parentId: '#player',
          plugins: [LevelSelector, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback, Clappr.MediaControl],
          events: {onReady: function() {var plugin = this.getPlugin('click_to_pause'); plugin && plugin.disable();},},
          height: 355,
          width: 630,
          autoPlay: 'true',
          shakaConfiguration: {
          manifest: {retryParameters: {maxAttempts: Infinity}},
          streaming: {retryParameters: {maxAttempts: Infinity}},
          drm: {retryParameters: {maxAttempts: Infinity}},
          preferredAudioLanguage: 'es-VE',
          },
          shakaOnBeforeLoad: function(shaka_player) {
            // shaka_player.getNetworkingEngine().registerRequestFilter() ...
          },
          parentId: '#player'
        });
    </script></div>
<div id="preloader"></div>
</body>
</html>