<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page19</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv2.22.css" rel="stylesheet">
<link href="hboplayxx.css" rel="stylesheet">
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
<div id="Html1" style="position:absolute;left:0px;top:0px;width:617px;height:332px;z-index:1">
<div id="player"></div>
    <script>
      var player = new Clappr.Player(
        {
          source: 'https://service-stitcher-ipv4.clusters.pluto.tv/v2/stitch/hls/channel/609ae5cd48d3200007b0a98e/master.m3u8?advertisingId=&appName=web&appVersion=6.4.0-3bcdc583b1e5a19f7836864e7ebe5e04d5e576c9&app_name=web&clientDeviceType=0&clientID=c3969459-aa26-42a7-8677-098d37671f2e&clientModelNumber=1.0.0&country=VE&deviceDNT=false&deviceId=c3969459-aa26-42a7-8677-098d37671f2e&deviceLat=10.9500&deviceLon=-63.8500&deviceMake=chromium-webview&deviceModel=web&deviceType=web&deviceVersion=103.0.5060&marketingRegion=VE&serverSideAds=true&sessionID=e0544a6a-13e1-11ed-8602-0242ac110003&sid=e0544a6a-13e1-11ed-8602-0242ac110003&userId=&jwt=eyJhbGciOiJIUzI1NiIsImtpZCI6ImZjNGQ5YTM0LWFjZTMtNDM5Zi04NDc2LWNiNjEyZWI4MmU2NSIsInR5cCI6IkpXVCJ9.eyJzZXNzaW9uSUQiOiJlMDU0NGE2YS0xM2UxLTExZWQtODYwMi0wMjQyYWMxMTAwMDMiLCJjbGllbnRJUCI6IjE5MC4xOTkuNjkuNjYiLCJjaXR5IjoiUG9ybGFtYXIiLCJwb3N0YWxDb2RlIjoiIiwiY291bnRyeSI6IlZFIiwiZG1hIjowLCJhY3RpdmVSZWdpb24iOiJWRSIsImRldmljZUxhdCI6MTAuOTUsImRldmljZUxvbiI6LTYzLjg1LCJwcmVmZXJyZWRMYW5ndWFnZSI6ImVzIiwiZGV2aWNlVHlwZSI6IndlYiIsImRldmljZVZlcnNpb24iOiIxMDMuMC41MDYwIiwiZGV2aWNlTWFrZSI6ImNocm9taXVtLXdlYnZpZXciLCJkZXZpY2VNb2RlbCI6IndlYiIsImFwcE5hbWUiOiJ3ZWIiLCJhcHBWZXJzaW9uIjoiNi40LjAtM2JjZGM1ODNiMWU1YTE5Zjc4MzY4NjRlN2ViZTVlMDRkNWU1NzZjOSIsImNsaWVudElEIjoiYzM5Njk0NTktYWEyNi00MmE3LTg2NzctMDk4ZDM3NjcxZjJlIiwiY21BdWRpZW5jZUlEIjoiIiwiaXNDbGllbnRETlQiOmZhbHNlLCJ1c2VySUQiOiIiLCJsb2dMZXZlbCI6IkRFRkFVTFQiLCJ0aW1lWm9uZSI6IkFtZXJpY2EvQ2FyYWNhcyIsInNlcnZlclNpZGVBZHMiOnRydWUsImUyZUJlYWNvbnMiOmZhbHNlLCJmZWF0dXJlcyI6e30sImF1ZCI6IioucGx1dG8udHYiLCJleHAiOjE2NTk2Mzg0MzcsImp0aSI6IjAyMWIxMjVlLTVhZjgtNGMyZi05ZGE4LWE1N2Y3M2Y5OWE4NiIsImlhdCI6MTY1OTYwOTYzNywiaXNzIjoiYm9vdC5wbHV0by50diIsInN1YiI6InByaTp2MTpwbHV0bzpkZXZpY2VzOlZFOll6TTVOamswTlRrdFlXRXlOaTAwTW1FM0xUZzJOemN0TURrNFpETTNOamN4WmpKbCJ9.ucGSJfAJ9oPBnTzV3jz8EZ8vFuDvZne8Iel7LQnTZNI&masterJWTPassthrough=true&paln=AQzzBGQEike93ayZG5k6gegRWy5D2ampfhm1tXG-0C0uyxJFwE-c3ZMHpWJKnV1VK5-irjkgWXP1q_ZCedLZxXrxrksjUzk7DKAANwGGywurA0_b-FDB-_NLRSwBIqupPfrXX9ucp4zS_ov7Y7J2StOqYjFDvKP2WSHUF91tGHrim_6LXszQ
uAaRsKssmdsZujapbGBz5CTCVnHnP7n68DDDBWuneHtlCK-ynmqMuIeq91VVB3UNvewE659hEH9A15Y1681I3lGcrxW9BIiNI4RnAFu_HsRnsq4_Z5B2y9IG9V-C7P9VB69wWxOzTOcsOsWo-BZ-mbTuZv_1sEb2PL6RDzRT2DqVgETQzjb3jMBBvM7NsOwFdMcZy4kK0nI8dD3gOXb0Nk5f8HIzkwAPzfWItQPUPfWJ2yCMMSDNonCWKdUdui79MeGzrjrytDtdUuCiDgAI4H1IXIne65ExHRVyiZYypANJNp6lxcIzF85vcrzWV9j04ut07d70oaHc6kZ-78SCI-ElVGWNBYxQD2hOn2xrIonTMB2mUcRABlCN2xpmhi9-LLeIOiskdJ3gba-jfRnYAmqKVlSk9qZsxsIzddmdhDVZbXwhqDed3S4RIE0SsUbyI3mRbbiJIqbMYxFN7DQGVjrFlI7c9c4tCi1rMrg164LvOlp_h8vs8W98iouIQ-jVNC7NyDZMXsHqv7acnrx2kNc0P-9XdXFjJN_EHgjAr-QKlLljFS2DEaCsPsT3eBtugkJ-61K2pLILw3DrC57gC0zytXaFWn5eLaBC1lt9vqxGCSrPronIiGjS4UspiW6OHIgWQwXHFBNIUS9LtnUM9tgs9W9BrFjfDlrtRsxRymOmyFIWbe4ZQvwgvBnM5sNZFKjkULERyTKtAxlKKo9jcsbBVXiE-vEwFMLXyQp248a0G-0ZBo5kooNV0VMFC5cbSzGv9vJYMgCnGNVUhM-C2v0m7XpGVhOzWUAnHE_xgJX0UfWDVOqVa6ihQNYPTL91sOOSCGY9OAQP8OKCXu3DzQ48a2iZbX0PR25ID97qU0go1mzLDHdZHWogaWIBEjPSBLxeSWh5PHp_1Z03Dw..&eventVOD=true',
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