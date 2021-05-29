/*  ---------------------------------------------------
    Theme Name: Anime
    Description: Anime video tamplate
    Author: Colorib
    Author URI: https://colorib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

"use strict";

(function($) {
    /*------------------
        Preloader
    --------------------*/
    $(window).on("load", function() {
        $(".loader").fadeOut();
        $("#preloder")
            .delay(200)
            .fadeOut("slow");

        /*------------------
            FIlter
        --------------------*/
        $(".filter__controls li").on("click", function() {
            $(".filter__controls li").removeClass("active");
            $(this).addClass("active");
        });
        if ($(".filter__gallery").length > 0) {
            var containerEl = document.querySelector(".filter__gallery");
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $(".set-bg").each(function() {
        var bg = $(this).data("setbg");
        $(this).css("background-image", "url(" + bg + ")");
    });

    // Search model
    $(".search-switch").on("click", function() {
        $(".search-model").fadeIn(400);
    });

    $(".search-close-switch").on("click", function() {
        $(".search-model").fadeOut(400, function() {
            $("#search-input").val("");
        });
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: "#mobile-menu-wrap",
        allowParentLinks: true
    });

    /*------------------
		Hero Slider
	--------------------*/
    var hero_s = $(".hero__slider");
    hero_s.owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        nav: true,
        navText: [
            "<span class='arrow_carrot-left'></span>",
            "<span class='arrow_carrot-right'></span>"
        ],
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        mouseDrag: false
    });

    /*------------------
        Video Player
    --------------------*/
    const player = new Plyr("#player", {
        controls: [
            "play-large",
            "play",
            "progress",
            "current-time",
            "mute",
            "captions",
            "settings",
            "fullscreen"
        ],
        seekTime: 25
    });

    /*------------------
        Niceselect
    --------------------*/
    $("select").niceSelect();

    /*------------------
        Scroll To Top
    --------------------*/
    $("#scrollToTopButton").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
})(jQuery);

function changeBG(x) {
    let textColor = "#2B2B2B";
    if (x.value === "#0B0C2A") {
        // if dark
        textColor = "#ffffff";
    } else {
        // if light
        textColor = "#2B2B2B";
    }
    document.querySelector(".blog-details").style.background = x.value;
    document.querySelector(".blog__details__title h2").style.color = textColor;
    document.querySelector(".blog__details__title h6").style.color = textColor;
    document.querySelector("#novel-content").style.color = textColor;
    document.querySelector(
        ".anime__details__review h5"
    ).style.color = textColor;
    document.querySelector(".anime__details__form h5").style.color = textColor;
    document.querySelectorAll(".blog__details__tags a").forEach(item => {
        item.style.background = textColor;
    });

    document.querySelectorAll(".blog__details__btns__item a").forEach(item => {
        item.style.color = "#b7b7b7";
        item.style.background = "rgba(255, 255, 255, 0.1)";
    });
}

function changeFZ(x) {
    document.getElementById("novel-content").style.fontSize = x.value + "px";
}

function changeLH(x) {
    document.getElementById("novel-content").style.lineHeight = x.value;
}

function changePD(x) {
    if (x.value === "full") {
        document
            .querySelector("#blog-details .container")
            .classList.add("fullKhung");
    } else {
        document
            .querySelector("#blog-details .container")
            .classList.remove("fullKhung");
    }
}

function changeFF(x) {
    document.getElementById("novel-content").style.fontFamily =
        x.value + ",sans-serif";
}

//---------------------------------------------- DIALOGFLOW -----------------------------------------------------------------
if ("webkitSpeechRecognition" in window) {
    var message = document.querySelector("#message");

    // SPA setting
    var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
    var recognition = new SpeechRecognition();
    recognition.lang = "vi-VN";
    recognition.interimResults = false;

    recognition.onresult = function(event) {
        var lastResult = event.results.length - 1;
        var content = event.results[lastResult][0].transcript;

        checking(content);
    };

    // recognition.onerror = function(event) {
    //     message.textContent = "Đã có lỗi: " + event.error;
    // };

    // // Test event
    // recognition.onspeechstart = function() {
    //     document.querySelector("#OnSpeech").textContent =
    //         "Speech has been detected";
    // };
    // recognition.onspeechend = function() {
    //     document.querySelector("#OnSpeech").textContent =
    //         "Speech has stopped being detected";
    // };
    // recognition.onaudiostart = function() {
    //     document.querySelector("#OnAudio").textContent =
    //         "Audio capturing started";
    // };
    // recognition.onaudioend = function() {
    //     document.querySelector("#OnAudio").textContent =
    //         "Audio capturing ended";
    // };
    // recognition.onsoundstart = function() {
    //     document.querySelector("#OnSound").textContent =
    //         "Some sound is being received";
    // };
    // recognition.onsoundend = function() {
    //     document.querySelector("#OnSound").textContent =
    //         "Sound has stopped being received";
    // };
    // recognition.onstart = function() {
    //     document.querySelector("#OnStart").textContent = "Start listening";
    // };
    // recognition.onend = function() {
    //     document.querySelector("#OnStart").textContent = "End listening";
    // };

    // // Key event
    // let fired = false;
    // $(document)
    //     .on("keydown", function(e) {
    //         if (!fired && e.keyCode === 192) {
    //             fired = true;
    //             recognition.start();
    //             // typing()
    //         }
    //     })
    //     .on("keyup", function(e) {
    //         if (e.keyCode === 192) {
    //             fired = false;
    //             recognition.stop();
    //         }
    //     });

    // Always Listen
    // recognition.start();
    // recognition.addEventListener("end", () => recognition.start());

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

    var timKiem = false;
    function checking(mess) {
        playEndSound();
        const command = removeAccents(mess).toLowerCase();
        console.log("command = " + command);

        if (timKiem) {
            console.log("searching: " + mess);
            searching(mess);
            timKiem = false;
        }
        if (timKiem == false && command == "tim kiem") {
            timKiem = true;
        } else if (command == "quay ve" || command == "quay lai") {
            window.history.back();
        } else if (command == "tro lai") {
            window.history.forward();
        } else if (command == "trang chu") {
            window.location.href = "/";
        } else if (command == "theo doi") {
            window.location.href = "/follow";
        } else if (command == "doc") {
            responsiveVoice.speak(
                document.querySelector("#novel-content").innerText
            );
        } else if (command == "noi dung") {
            responsiveVoice.speak(
                document.querySelector("#novel-description").innerText
            );
        } else if (command == "dung lai") {
            responsiveVoice.pause();
        } else if (command == "tiep tuc") {
            responsiveVoice.resume();
        } else {
            typing(mess);
        }
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

function searching(mess) {
    // Input Typing
    document.querySelector("#search").value = mess;
    // Input Enter Key Press
    document.querySelector(".search-model-form").submit();
}

function playStartSound() {
    var audio = new Audio("/sounds/beep3.wav");
    audio.play();
}

function playEndSound() {
    var audio = new Audio("/sounds/beep4.wav");
    audio.play();
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
    playStartSound();
    recognition.start();
});
