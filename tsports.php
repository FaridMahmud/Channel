<!DOCTYPE html>
<html lang="en">
<head>
     <script>
(function(lesli){
var d = document,
    s = d.createElement('script'),
    l = d.scripts[d.scripts.length - 1];
s.settings = lesli || {};

s.async = true;
s.referrerPolicy = 'no-referrer-when-downgrade';
l.parentNode.insertBefore(s, l);
})({})
</script>
    <meta charset="UTF-8">
    <title>ALL IN ONE TATAPLAY</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .telegram-link {
            background-color: #0088cc;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .jwplayer {
            position: absolute !important;
            top: 50px; /* Adjust to fit below the Telegram link */
            width: 100%;
            height: calc(100% - 50px); /* Adjust to fit below the Telegram link */
        }

        .jwplayer.jw-flag-aspect-mode {
            min-height: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <!-- Telegram link -->
    <div class="telegram-link">
        <a href="https://t.me/live_cricket_24" target="_blank" style="color: white; text-decoration: none;">Join us on Telegram</a>
    </div>
    
    <!-- JWPlayer -->
    <div id="jwplayerDiv"></div>

    <script src="//content.jwplatform.com/libraries/SAHhwvZq.js"></script>
    <script type="text/javascript">
        var config = {"file":"https://ottb.live.cf.ww.aiv-cdn.net/lhr-nitro/live/clients/dash/enc/lsdasbvglv/out/v1/bb548a3626cd4708afbb94a58d71dce9/cenc.mpd","drm":{"clearkey":{"keyId":"4e993aa8c1f295f8b94e8e9e6f6d0bfe","key":"86a1ed6e96caab8eb1009fe530d2cf4f"}}};

        jwplayer("jwplayerDiv").setup({
            file: config.file,
            position: 'bottom',
            autostart: true,
            stretching: "",
            width: "100%",
            type: "dash",
            drm: {
            clearkey: {
                    keyId: config.drm.clearkey.keyId,
                    key: config.drm.clearkey.key
                }
            }
          
        });
    </script>
</body>
</html>

