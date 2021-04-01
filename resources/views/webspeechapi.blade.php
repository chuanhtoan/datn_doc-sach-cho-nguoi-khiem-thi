<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>

    {{-- JQuery --}}
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
</head>
<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="101854082014253">
    </div>

    <!-- Responsive Voice -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=6du6EqaA"></script>
    <script>
        responsiveVoice.setDefaultVoice("Vietnamese Female");
    </script>

    <script>
        if ("webkitSpeechRecognition" in window) {
            var message = document.querySelector('#message');

            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;

            var grammar = '#JSGF V1.0;'

            var recognition = new SpeechRecognition();
            var speechRecognitionList = new SpeechGrammarList();
            speechRecognitionList.addFromString(grammar, 1);
            recognition.grammars = speechRecognitionList;
            recognition.lang = 'vi-VN';
            recognition.interimResults = false;

            recognition.onresult = function(event) {
                var lastResult = event.results.length - 1;
                var content = event.results[lastResult][0].transcript;
                message.textContent = 'Bạn đã nói: ' + content + '.';
            };

            recognition.onerror = function(event) {
                message.textContent = 'Đã có lỗi: ' + event.error;
            }

            // Get chatbot content
            let messages = document.querySelectorAll('.messages ._4xko._4xkr>span')

            // Key event
            let fired = false
            $(document).on('keydown', function(e) {
                if (!fired && (e.keyCode === 96 || e.keyCode === 45)) {
                    console.log('listening...!')
                    fired = true
                    responsiveVoice.speak(lastMessage[lastMessage.length-1].innerText)
                    recognition.start()
                }
            }).on('keyup', function(e) {
                if (e.keyCode === 96 || e.keyCode === 45) {
                    console.log('stop listening...!')
                    fired = false
                    recognition.stop()
                }
            });
        }
    </script>
</body>
</html>
