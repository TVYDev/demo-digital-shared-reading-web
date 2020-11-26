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
        .console {
            display: block;
            margin-top: 20px;
            color: darkred;
        }
    </style>
</head>
<body>
<button type="button" class="btn-action" value="CLOSED">❌</button>
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

<h4>📱 App Links:</h4>
<button type="button" class="btn-action" value="UPGRADE-KYC">KYC</button>
<button type="button" class="btn-action" value="MONEY-TRANSFER">Money Transfer</button>

<code class="console"></code>

<script type="text/javascript">
    window.onload = function(event) {
        let token = '<?php echo \Illuminate\Support\Facades\Session::get('santa-token'); ?>';
        let dataToNative = {
            partner: 'Nextzy',
            token: token,
            remark: '#joinSantaGame',
            transferTo: '012xxxxxx'
        }

        let appLinkBtns = document.querySelectorAll('.btn-action');
        appLinkBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                let value = this.getAttribute('value');
                dataToNative.action = value.toUpperCase();
                let jsonStringData = JSON.stringify(dataToNative);

                document.querySelector('.console').innerHTML = 'Sending data: ' + jsonStringData;

                passValueToNative(jsonStringData);
            })
        })
    }

    function passValueToNative (value) {
        let consoleDiv = document.querySelector('.console');
        // Check if the page is viewed on mobile
        if(navigator.userAgent.toLowerCase().includes('mobile')) {
            // For iOS
            if(window.webkit) {
                window.webkit.messageHandlers.actionFromWebView.postMessage(value);
            }
            else if(Android) {
                Android.actionFromWebView(value);
            }
            // For Android
            else {
                consoleDiv.innerHTML += '<br />Unknown Client';
            }
        }
        else {
            consoleDiv.innerHTML += '<br />Page is not viewed on mobile';
        }
    }
</script>
</body>
</html>
