<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>

    <!-- JQuery -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- Custom Dialogflow CSS -->
    <style>
        df-messenger {
            --df-messenger-button-titlebar-color: #E53637;
            margin-right: auto;
        }
        button#widgetIcon .df-chat-icon {
            object-fit: contain;
        }
        #voiceBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: red;
            z-index: 9999;
            display: none;
            background: #e53637;
            border: 2px solid white;
        }
        @media all and (max-width: 600px) {
            df-messenger {
                display: none;
            }
            #voiceBtn {
                display: block;
            }
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

    <!-- Voice Button -->
    <button id="voiceBtn"></button>
    <!-- Voice Button -->

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
        // Variables
        let timKiem = false;
        let theLoai = false;
        let chon = false;
        const pathName = window.location.pathname;

        // Sounds
        const startSound = new Audio("/sounds/beep3.wav");
        const endSound = new Audio("/sounds/beep4.wav");

        // Speech Recognition
        if ("webkitSpeechRecognition" in window) {
            var message = document.querySelector("#message");

            // SPA setting
            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            var recognition = new SpeechRecognition();
            recognition.lang = "vi-VN";
            recognition.interimResults = false;

            recognition.onresult = function(event) {
                var lastResult = event.results.length - 1
                var content = event.results[lastResult][0].transcript
                message.textContent = 'Bạn đã nói: ' + content + '.'

                checking(content)
            };

            recognition.onerror = function(event) {
                timKiem = false
                theLoai = false
                chon = false
                message.textContent = 'Đã có lỗi: ' + event.error
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
                endSound.play();
                document.querySelector('#OnStart').textContent = 'End listening';
            }

            const dfMessenger = document.querySelector("df-messenger");
            let test = false;

            // Dialogflow speak respone message
            dfMessenger.addEventListener("df-request-sent", function(event) {
                test = true;
            });
            dfMessenger.addEventListener("df-response-received", function(event) {
                if (test) {
                    responsiveVoice.speak(
                        event.detail.response.queryResult.fulfillmentText
                    );
                }
            });

            // Dialogflow change placeholder
            var inputField = null;
            dfMessenger.addEventListener("df-messenger-loaded", function(event) {
                test = false;
                inputField = document
                    .querySelector("df-messenger")
                    .shadowRoot.querySelector("df-messenger-chat")
                    .shadowRoot.querySelector("df-messenger-user-input")
                    .shadowRoot.querySelector("input");
                inputField.placeholder = "Hỏi gì đi...";
            });
        }

        // Commands
        function checking(mess) {
            const command = removeAccents(mess).toLowerCase();
            console.log("command = " + command);

            // Resume speak command
            if (command == "tiep tuc") {
                responsiveVoice.resume();
                return 0;
            } else {
                responsiveVoice.cancel();
            }

            // Search by Name
            if (timKiem) {
                console.log("searching: " + command);
                searching(command);
                timKiem = false;
            }
            // Search by Category
            else if (theLoai) {
                console.log("category: " + command);
                cateSearch(command);
                theLoai = false;
            }
            // Choose book result
            else if (chon) {
                console.log("choose: " + command);
                console.log("toNum: " + toNum(command));
                choose(toNum(command));
                chon = false;
            }
            // Commands
            else if (command == "tim kiem") {
                timKiem = true;
                setTimeout(function() {
                    recognition.start();
                }, 500);
            } else if (command == "the loai") {
                theLoai = true;
                setTimeout(function() {
                    recognition.start();
                }, 500);
            } else if (command == "chon") {
                // Doc ket qua
                responsiveVoice.speak("có " + document.querySelectorAll(".result-title").length + " sách");

                // Chon
                chon = true;
                setTimeout(function() {
                    recognition.start();
                }, 500);
            // Others
            } else if (command == "quay ve" || command == "quay lai") {
                window.history.back();
            } else if (command == "tro lai") {
                window.history.forward();
            } else if (command == "trang chu") {
                window.location.href = "/";
            } else if (command == "theo doi") {
                window.location.href = "/follow";
            } else if (command == "ket qua") {
                // Doc ket qua
                responsiveVoice.speak("có " + document.querySelectorAll(".result-title").length + " sách");

                // Doc ten sach
                let resultTitle = "";
                document.querySelectorAll(".result-title").forEach(title => {
                    resultTitle += title.innerText + " , ";
                });
                responsiveVoice.speak(resultTitle);
            // Group Detail Page
            } else if (command == "thong tin") {
                let result = document.querySelector("#anime-title").innerText;
                result += ', ' + document.querySelector(".anime__details__widget").innerText;
                responsiveVoice.speak(result);
            } else if (command == "noi dung") {
                responsiveVoice.speak(
                    document.querySelector("#novel-description").innerText
                );
            } else if (command == "chuong" || command == "truong") {
                if (pathName.startsWith("/novel")) {
                    if (pathName.match(new RegExp("/", "g")).length > 2) {
                        responsiveVoice.speak(
                            document.querySelector("#blog-title").innerText
                        );
                    } else {
                        responsiveVoice.speak(
                            "có " +
                                document.querySelectorAll(".chapters__list--item")
                                    .length +
                                " chương"
                        );
                    }
                }
            } else if (command.startsWith("chuong ") || command.startsWith("truong ")) {
                let chapter = command.split(" ").pop();
                if (chapter == "khong") chapter = 0;
                if (chapter < document.querySelectorAll(".chapters__list--item").length && chapter >= 0)
                    window.location.href = window.location.pathname + "/" + chapter;
                else
                    responsiveVoice.speak('Chương không tồn tại')
            } else if (command == "doc") {
                if (pathName.startsWith("/novel")) {
                    if (pathName.match(new RegExp("/", "g")).length > 2) {
                        responsiveVoice.speak(
                            document.querySelector("#novel-content").innerText
                        );
                    } else {
                        responsiveVoice.speak(
                            "sách " + document.querySelector("#anime-title").innerText
                        );
                    }
                }
            // Chat with Bot
            } else {
                typing(mess);
            }
        }

        // Command "doc"
        function checkCrPage() {
            var pathName = window.location.pathname;
            if (pathName == "/") {
                responsiveVoice.speak("Trang chủ");
            }
            if (pathName == "/follow") {
                responsiveVoice.speak("Theo dõi");
            }
            if (pathName.startsWith('/novel')) {
                responsiveVoice.speak("Chi tiết");
            }
            if (pathName == "/search") {
                responsiveVoice.speak("Tìm kiếm");
            }
            if (pathName.startsWith("/category")) {
                responsiveVoice.speak("Thể loại");
            }
            if (pathName == "/login") {
                responsiveVoice.speak("Bạn chưa đăng nhập");
            }
            if (pathName == "/about") {
                responsiveVoice.speak(document.querySelector(".login__form").innerText);
            }
        }

        function typing(mess) {
            // Input Typing
            inputField.value = mess;
            // Input Enter Key Press
            const ev = document.createEvent("Events");
            ev.initEvent("keypress", true, true);
            ev.keyCode = 13;
            ev.which = 13;
            ev.charCode = 13;
            ev.key = "Enter";
            ev.code = "Enter";
            inputField.dispatchEvent(ev);
        }

        function searching(name) {
            // Input Typing
            document.querySelector("#search").value = name;
            // Input Enter Key Press
            document.querySelector(".search-model-form").submit();
        }

        function cateSearch(cate) {
            let cateResult = categories.find(category => removeAccents(category.name).toLowerCase() == cate);
            if (cateResult) {
                window.location.href = "/category/" + cateResult.id;
            } else {
                responsiveVoice.speak('Thể loại không tồn tại');
            }
        }

        function choose(novel) {
            const resultArr = document.querySelectorAll(".result-title a");
            if (novel <= resultArr.length && novel > 0)
                resultArr[novel].click();
            else
                responsiveVoice.speak('Sách không tồn tại');
        }

        // String to number
        function toNum(str) {
            console.log(str)
            switch (str) {
                case 'khong':
                    return 0
                    break
                case 'mot':
                    return 1
                    break
                case 'hai':
                    return 2
                    break
                case 'ba':
                    return 3
                    break
                case 'bon':
                    return 4
                    break
                case 'nam':
                    return 5
                    break
                case 'sau':
                    return 6
                    break
                case 'bay':
                    return 7
                    break
                case 'tam':
                    return 8
                    break
                case 'chin':
                    return 9
                    break
                case 'muoi':
                    return 10
                    break
                default:
                    return str
            }
        }

        // Bo dau tieng Viet
        function removeAccents(str) {
            var AccentsMap = [
                "aàảãáạăằẳẵắặâầẩẫấậ",
                "AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬ",
                "dđ",
                "DĐ",
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
            for (var i = 0; i < AccentsMap.length; i++) {
                var re = new RegExp("[" + AccentsMap[i].substr(1) + "]", "g");
                var char = AccentsMap[i][0];
                str = str.replace(re, char);
            }
            return str;
        }

        // Search model
        $("#voiceBtn").on("click", function() {
            responsiveVoice.pause();
            checkCrPage();
            startSound.play();
            recognition.start();
        });
    </script>
</body>
</html>
