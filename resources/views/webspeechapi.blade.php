<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>

    {{-- JQuery --}}
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    {{-- Custom CSS --}}
    <style>
        df-messenger {
            --df-messenger-button-titlebar-color: #E53637;
        }
        button#widgetIcon .df-chat-icon {
            object-fit: contain;
        }
    </style>
</head>
<body>
    <h1>Web Speech API</h1>
    <p id="OnSpeech">OnSpeach:</p>
    <p id="OnAudio">OnAudio:</p>
    <p id="OnSound">OnSound:</p>
    <p id="OnStart">OnStart:</p>
    <p id="message">Kết quả:</p>
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

            var grammar = '#JSGF V1.0; grammar colors; public <color> = xanh | vang '
                + '| đỏ | alo | xin | chao | brown | chocolate | coral | crimson '
                + '| cyan | fuchsia | ghostwhite | gold | goldenrod | gray | green | indigo '
                + '| ivory | khaki | lavender | lime | linen | magenta | maroon | moccasin '
                + '| navy | olive | orange | orchid | peru | pink | plum | purple | red '
                + '| salmon | sienna | silver | snow | tan | teal | thistle | tomato '
                + '| turquoise | violet | white | yellow ;'

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

            // Test event
            recognition.onspeechstart = function() {
                document.querySelector('#OnSpeech').textContent = 'Speech has been detected';
            }
            recognition.onspeechend = function() {
                document.querySelector('#OnSpeech').textContent = 'Speech has stopped being detected';
            }
            recognition.onaudiostart = function() {
                document.querySelector('#OnAudio').textContent = 'Audio capturing started';
            }
            recognition.onaudioend = function() {
                document.querySelector('#OnAudio').textContent = 'Audio capturing ended';
            }
            recognition.onsoundstart = function() {
                document.querySelector('#OnSound').textContent = 'Some sound is being received';
            }
            recognition.onsoundend = function() {
                document.querySelector('#OnSound').textContent = 'Sound has stopped being received';
            }
            recognition.onstart = function() {
                document.querySelector('#OnStart').textContent = 'Start listening';
            }
            recognition.onend = function() {
                document.querySelector('#OnStart').textContent = 'End listening';
            }

            // Always Listen
            // recognition.start()
            // recognition.addEventListener('end', () => recognition.start())


        }
    </script>
</body>
</html>
