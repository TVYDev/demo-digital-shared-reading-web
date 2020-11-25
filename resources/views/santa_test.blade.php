<html>
<head>
    <title>Santa Web View Testing</title>
    <style>
        body {
            font-family: sans-serif;
        }
        li {
            list-style: none;
        }
        span {
            background-color: lightgray;
            padding: 3px 5px;
            border-radius: 3px;
        }
        form {
            margin-top: 20px;
        }
        h4 {
            font-weight: bold;
        }
    </style>
</head>
<body>
<button type="button" class="btn-close">❌</button>
<h2>🎅 Santa Web View Testing</h2>
@if(isset($payload))
    <h4>📥 Receive data from native:</h4>
    <code>
        @foreach($payload as $k => $v)
            <li><span><strong>{!! $k !!}</strong></span> {!! $v !!}</li>
            <hr />
        @endforeach
    </code>
@endif
<div class="appendTextTest"></div>

<h4>📱 App Links:</h4>
<button type="button" class="btn-app-link" value="UPGRADE-KYC">KYC</button>
<button type="button" class="btn-app-link" value="MONEY-TRANSFER">Money Transfer</button>

<script type="text/javascript">
    window.onload = function(event) {
        let token = '<?php echo \Illuminate\Support\Facades\Session::get('santa-token'); ?>';
        let dataToNative = {
            partner: 'Nextzy',
            token: token,
            remark: '#joinSantaGame',
            transferTo: '012xxxxxx'
        }

        let appLinkBtns = document.querySelectorAll('.btn-app-link');
        appLinkBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                let value = this.getAttribute('value');
                dataToNative.action = value.toUpperCase();
                let jsonStringData = JSON.stringify(dataToNative);

                passValueToNative(jsonStringData);
            })
        })

        document.querySelector('.btn-close').addEventListener('click', function() {
            passValueToNative('CLOSED');
        })
    }

    function passValueToNative (value) {
        // Check if the page is viewed on mobile
        alert('here');
        document.querySelector('.appendTextTest').innerHTML = value;
        if(navigator.userAgent.toLowerCase().includes('mobile')) {
            // For Android
            alert('clicked');
            if(window.webkit) {
                alert('click window webkit');
                window.webkit.messageHandlers.actionFromWebView.postMessage(value);
            }
            else if(Android) {
                Android.actionFromWebView(value);
            }
            // For iOS
            else {
                alert('Unknown client');
            }
        }
        else {
            alert('Page is not viewed on mobile');
        }
    }
</script>
</body>
</html>
