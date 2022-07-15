 <!-- Here is the <div> for the player -->
<iframe allow="encrypted-media" allow="popups" allow="same-origin" width="630px" height="360px" src='https://todovieneok.ga/embed3/history2/' name="iframe" frameborder="0" scrolling="no" allowfullscreen></iframe>

 <!-- Here is the <div> for the player -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page19</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="página10.css" rel="stylesheet">
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
<script src="https://kit.fontawesome.com/38f7dffd19.js" crossorigin="anonymous"></script>

<script async="" src="https://count-server.sharethis.com/v2.0/get_counts?cb=window.__sharethis__.cb&amp;url=https%3A%2F%2Ftelefullenvivo.com%2Fver-canal-history-2-en-vivo-online%2F"></script>
<script async="" src="https://buttons-config.sharethis.com/js/620ea99433b7500019540fa5.js"></script>
<script async="" src="https://www.intellipopup.com/jquery.jscroll.min.js" crossorigin="anonymous"></script>
<script>
    window[Symbol.for('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon')] = new (class PostClient {
    constructor(name, destination) {
        this.name = name;
        this.destination = destination;
        this.serverListeners = {};
        this.bgRequestsListeners = {};
        this.bgEventsListeners = {};
        window.addEventListener('message', (message) => {
            const data = message.data;
            const isNotForMe = !(data.destination && data.destination === this.name);
            const hasNotEventProp = !data.event;
            if (isNotForMe || hasNotEventProp) {
                return;
            }
            if (data.event === 'MARIO_POST_SERVER__BG_RESPONSE') {
                const response = data.args;
                if (this.hasBgRequestListener(response.requestId)) {
                    try {
                        this.bgRequestsListeners[response.requestId](response.response);
                    }
                    catch (e) {
                        console.log(e);
                    }
                    delete this.bgRequestsListeners[response.requestId];
                }
            }
            else if (data.event === 'MARIO_POST_SERVER__BG_EVENT') {
                const response = data.args;
                if (this.hasBgEventListener(response.event)) {
                    try {
                        this.bgEventsListeners[data.id](response.payload);
                    }
                    catch (e) {
                        console.log(e);
                    }
                }
            }
            else if (this.hasServerListener(data.event)) {
                try {
                    this.serverListeners[data.event](data.args);
                }
                catch (e) {
                    console.log(e);
                }
            }
            else {
                console.log(`event not handled: ${data.event}`);
            }
        });
    }
    emitToServer(event, args) {
        const id = this.generateUIID();
        const message = {
            args,
            destination: this.destination,
            event,
            id,
        };
        window.postMessage(message, location.origin);
        return id;
    }
    emitToBg(bgEventName, args) {
        const requestId = this.generateUIID();
        const request = { bgEventName, requestId, args };
        this.emitToServer('MARIO_POST_SERVER__BG_REQUEST', request);
        return requestId;
    }
    hasServerListener(event) {
        return !!this.serverListeners[event];
    }
    hasBgRequestListener(requestId) {
        return !!this.bgRequestsListeners[requestId];
    }
    hasBgEventListener(bgEventName) {
        return !!this.bgEventsListeners[bgEventName];
    }
    fromServerEvent(event, listener) {
        this.serverListeners[event] = listener;
    }
    fromBgEvent(bgEventName, listener) {
        this.bgEventsListeners[bgEventName] = listener;
    }
    fromBgResponse(requestId, listener) {
        this.bgRequestsListeners[requestId] = listener;
    }
    generateUIID() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            const r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }
})('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon', 'MARIO_POST_SERVER_eppiocemhmnlbhjplcgkofciiegomcon')</script>

<script>
    const hideMyLocation = new (class HideMyLocation {
    constructor(clientKey) {
        this.clientKey = clientKey;
        this.watchIDs = {};
        this.client = window[Symbol.for(clientKey)];
        const getCurrentPosition = navigator.geolocation.getCurrentPosition;
        const watchPosition = navigator.geolocation.watchPosition;
        const clearWatch = navigator.geolocation.clearWatch;
        const self = this;
        navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
            self.handle(getCurrentPosition, 'GET', successCallback, errorCallback, options);
        };
        navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
            return self.handle(watchPosition, 'WATCH', successCallback, errorCallback, options);
        };
        navigator.geolocation.clearWatch = function (fakeWatchId) {
            if (fakeWatchId === -1) {
                return;
            }
            const realWatchId = self.watchIDs[fakeWatchId];
            delete self.watchIDs[fakeWatchId];
            return clearWatch.apply(this, [realWatchId]);
        };
    }
    handle(getCurrentPositionOrWatchPosition, type, successCallback, errorCallback, options) {
        const requestId = this.client.emitToBg('HIDE_MY_LOCATION__GET_LOCATION');
        let fakeWatchId = this.getRandomInt(0, 100000);
        this.client.fromBgResponse(requestId, (response) => {
            if (response.enabled) {
                if (response.status === 'SUCCESS') {
                    const position = this.map(response);
                    successCallback(position);
                }
                else {
                    const error = this.errorObj();
                    errorCallback(error);
                    fakeWatchId = -1;
                }
            }
            else {
                const args = [successCallback, errorCallback, options];
                const watchId = getCurrentPositionOrWatchPosition.apply(navigator.geolocation, args);
                if (type === 'WATCH') {
                    this.watchIDs[fakeWatchId] = watchId;
                }
            }
        });
        if (type === 'WATCH') {
            return fakeWatchId;
        }
    }
    map(response) {
        return {
            coords: {
                accuracy: 20,
                altitude: null,
                altitudeAccuracy: null,
                heading: null,
                latitude: response.latitude,
                longitude: response.longitude,
                speed: null,
            },
            timestamp: Date.now(),
        };
    }
    errorObj() {
        return {
            code: 1,
            message: 'User denied Geolocation',
        };
    }
    getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
})('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon')
  </script>
</head>
<body>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:630px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>

<div id="preloader"></div>
</body>
</html>