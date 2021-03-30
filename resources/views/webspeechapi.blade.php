<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button id="btnTalk">click</button>
    <p id="message"></p>

    <script src="https://code.responsivevoice.org/responsivevoice.js?key=6du6EqaA"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
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
                    console.log('listening...!')
                    fired = true
                    responsiveVoice.speak("xin chào", "Vietnamese Female")
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
