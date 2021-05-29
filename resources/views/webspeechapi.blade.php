<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>

    <!-- JQuery -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- Custom CSS -->
    <style>
        df-messenger {
            --df-messenger-button-titlebar-color: #E53637;
            margin-right: auto;
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
    <p id="test">Chưa nghe</p>
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

            // SPA setting
            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            var recognition = new SpeechRecognition();
            recognition.lang = 'vi-VN';
            recognition.interimResults = false;

            recognition.onresult = function(event) {
                var lastResult = event.results.length - 1;
                var content = event.results[lastResult][0].transcript;
                message.textContent = 'Bạn đã nói: ' + content + '.';

                checking(content)
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
            recognition.start()
            recognition.addEventListener('end', () => recognition.start())

            // Key event
            let fired = false
            $(document).on('keydown', function(e) {
                if (!fired && (e.keyCode === 192)) {
                    fired = true
                    recognition.start()
                    // typing()
                }
            }).on('keyup', function(e) {
                if (e.keyCode === 192) {
                    fired = false
                    recognition.stop()
                }
            });

            const dfMessenger = document.querySelector('df-messenger')

            // Dialogflow speak respone message
            dfMessenger.addEventListener('df-response-received', function (event) {
                responsiveVoice.speak(event.detail.response.queryResult.fulfillmentText)
            })

            // Dialogflow change placeholder
            var inputField = null
            dfMessenger.addEventListener('df-messenger-loaded', function (event) {
                inputField = document.querySelector('df-messenger').shadowRoot.querySelector('df-messenger-chat').shadowRoot.querySelector('df-messenger-user-input').shadowRoot.querySelector('input')
                inputField.placeholder = "Hỏi gì đi..."
            })

            function checking(mess) {
                const command = removeAccents(mess).toLowerCase()
                if(command == 'nghe') {
                    document.querySelector('#test').textContent = 'Teo nghe'
                }
                else if(command == 'quay ve') {
                    window.history.back()
                }
                else if(command == 'tro lai') {
                    window.history.forward()
                }
                else if(command == 'trang chu') {
                    window.location.href = '/'
                }
                else if(command == 'dung lai') {
                    responsiveVoice.pause();
                }
                else if(command == 'tiep tuc') {
                    // if(responsiveVoice.isPlaying()) {
                    //     console.log("I hope you are listening");
                    // }
                    responsiveVoice.resume();
                }
                else {
                    document.querySelector('#test').textContent = 'Teo chua nghe'
                }
            }

            function playStartSound() {
                var audio = new Audio('sounds/beep3.wav');
                audio.play();
            }

            function playEndSound() {
                var audio = new Audio('sounds/beep4.wav');
                audio.play();
            }

            function typing(mess) {
                // Input Typing
                inputField.value = mess
                // Input Enter Key Press
                const ev = document.createEvent('Events');
                ev.initEvent('keypress', true, true);
                ev.keyCode = 13;
                ev.which = 13;
                ev.charCode = 13;
                ev.key = 'Enter';
                ev.code = 'Enter';
                inputField.dispatchEvent(ev);
            }

            // Bo dau tieng Viet
            function removeAccents(str) {
            var AccentsMap = [
                "aàảãáạăằẳẵắặâầẩẫấậ",
                "AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬ",
                "dđ", "DĐ",
                "eèẻẽéẹêềểễếệ",
                "EÈẺẼÉẸÊỀỂỄẾỆ",
                "iìỉĩíị",
                "IÌỈĨÍỊ",
                "oòỏõóọôồổỗốộơờởỡớợ",
                "OÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢ",
                "uùủũúụưừửữứự",
                "UÙỦŨÚỤƯỪỬỮỨỰ",
                "yỳỷỹýỵ",
                "YỲỶỸÝỴ"
            ];
            for (var i=0; i<AccentsMap.length; i++) {
                var re = new RegExp('[' + AccentsMap[i].substr(1) + ']', 'g');
                var char = AccentsMap[i][0];
                str = str.replace(re, char);
            }
            return str;
            }
        }
    </script>
</body>
</html>
