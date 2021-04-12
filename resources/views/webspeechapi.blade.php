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
    <!-- Dialogflow -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
    intent="WELCOME"
    chat-title="Utako Hỗ Trợ"
    chat-icon="{{asset('img/icon.png')}}"
    agent-id="8f9fb2d1-f4f7-4010-947e-2124765be88c"
    language-code="en"
    ></df-messenger>

    <!-- Responsive Voice -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=CCtXSEMa"></script>
    <script>
        responsiveVoice.setDefaultVoice("Vietnamese Female");
    </script>

    <!-- Custom JS -->
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

            // Key event
            let fired = false
            $(document).on('keydown', function(e) {
                if (!fired && (e.keyCode === 96 || e.keyCode === 45)) {
                    fired = true
                    console.log('listening...!')
                    // responsiveVoice.speak('Xin chào!')
                    // recognition.start()
                    typing()
                    enterkey()
                }
            }).on('keyup', function(e) {
                if (e.keyCode === 96 || e.keyCode === 45) {
                    fired = false
                    console.log('stop listening...!')
                    // recognition.stop()
                }
            });

            // Dialogflow speak
            const dfMessenger = document.querySelector('df-messenger')
            dfMessenger.addEventListener('df-response-received', function (event) {
                responsiveVoice.speak(event.detail.response.queryResult.fulfillmentText)
            })

            // Input Typing
            function typing() {
                const text = 'xin chào'
                const inputField = document.querySelector('df-messenger').shadowRoot.querySelector('df-messenger-chat').shadowRoot.querySelector('df-messenger-user-input').shadowRoot.querySelector('input')
                inputField.value = text
            }

            // Input Enter Key Press
            function enterkey() {
                const ev = document.createEvent('Events');
                ev.initEvent('keypress', true, true);
                ev.keyCode = 13;
                ev.which = 13;
                ev.charCode = 13;
                ev.key = 'Enter';
                ev.code = 'Enter';
                const inputField = document.querySelector('df-messenger').shadowRoot.querySelector('df-messenger-chat').shadowRoot.querySelector('df-messenger-user-input').shadowRoot.querySelector('input')
                inputField.dispatchEvent(ev);
            }
        }
    </script>
</body>
</html>
