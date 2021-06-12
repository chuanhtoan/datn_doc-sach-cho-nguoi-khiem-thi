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

    // Commands
    let timKiem = false;
    let theLoai = false;
    let chon = false;
    function checking(mess) {
        playEndSound();
        const command = removeAccents(mess).toLowerCase();
        console.log("command = " + command);

        // Resume speak command
        if (command == "tiep tuc") {
            responsiveVoice.resume();
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
        if (theLoai) {
            console.log("category: " + command);
            cateSearch(command);
            theLoai = false;
        }
        // Choose book result
        if (chon) {
            console.log("choose: " + command);
            choose(command);
            chon = false;
        }

        if (timKiem == false && command == "tim kiem") {
            timKiem = true;
            setTimeout(function() {
                recognition.start();
            }, 500);
        } else if (theLoai == false && command == "the loai") {
            theLoai = true;
            setTimeout(function() {
                recognition.start();
            }, 500);
        } else if (chon == false && command == "chon") {
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
        } else if (command == "doc") {
            checkCrPage();
        } else if (command == "ket qua") {
            responsiveVoice.speak("có " + document.querySelectorAll(".result-title").length + " sách");
            let resultTitle = "";
            document.querySelectorAll(".result-title").forEach(title => {
                resultTitle += title.innerText + " , ";
            });
            responsiveVoice.speak(resultTitle);
        }
        // Group Detail Page
        else if (command == "noi dung") {
            responsiveVoice.speak(
                document.querySelector("#novel-description").innerText
            );
        } else if (command == "chuong" || command == "truong") {
            var pathName = window.location.pathname;
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
        } else if (
            command.startsWith("chuong ") ||
            command.startsWith("truong ")
        ) {
            var chapter = command.split(" ").pop();
            if (chapter == "khong") chapter = 0;
            if (chapter <= document.querySelectorAll(".chapters__list--item").length && novel >= 0)
                window.location.href = window.location.pathname + "/" + chapter;
            else
                responsiveVoice.speak('Chương không tồn tại')
        } else if (command == "thong tin") {
            responsiveVoice.speak(
                document.querySelector(".anime__details__widget").innerText
            );
        // Group Reading Page
        } else {
            typing(mess);
        }
    }
}

// Command "doc"
function checkCrPage() {
    var pathName = window.location.pathname;
    if (pathName == "/") {
        responsiveVoice.speak("bạn đang ở trang chủ");
    }
    if (pathName == "/search") {
        let searchResult = document.querySelectorAll(".product__item").length;
        responsiveVoice.speak("có " + searchResult + " kết quả tìm kiếm");
    }
    if (pathName == "/follow") {
        let searchResult = document.querySelectorAll(".product__item").length;
        responsiveVoice.speak("có " + searchResult + " sách đang theo dõi");
    }
    if (pathName.startsWith("/category")) {
        let searchResult = document.querySelectorAll(".product__item").length;
        responsiveVoice.speak("có " + searchResult + " kết quả tìm kiếm");
    }
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
    if (pathName == "/login") {
        responsiveVoice.speak("bạn chưa đăng nhập");
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
