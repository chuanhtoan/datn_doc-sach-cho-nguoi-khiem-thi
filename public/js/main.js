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

// Gramars
const grChuong = ["chuong", "truong", "phim", "tim", "cuong", "thuoc", "keu"];
const grBack = ["quay ve", "quay lai", "lai", "hoi nay"];
const grFollow = ["theo doi sach", "tham khao sach", "the loai sach"];
const grChoose = ["chon", "chau"];

// Variables
let timKiem = false;
let theLoai = false;
let chon = false;
let chuong = false;
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
        var lastResult = event.results.length - 1;
        var content = event.results[lastResult][0].transcript;

        checking(content);
    };

    recognition.onerror = function(event) {
        timKiem = false;
        theLoai = false;
        chon = false;
        chuong = false;
        message.textContent = "Đã có lỗi: " + event.error;
    };

    recognition.onend = function() {
        endSound.play();
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
}

// Commands
function checking(mess) {
    endSound.play();
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
        searching(command);
        timKiem = false;
    }
    // Search by Category
    else if (theLoai) {
        cateSearch(command);
        theLoai = false;
    }
    // Choose book result
    else if (chon) {
        choose(toNum(command) - 1);
        chon = false;
    }
    // Choose chapter
    else if (chuong) {
        chapter(command);
        chuong = false;
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
    } else if (grChoose.includes(command)) {
        // Doc ket qua
        responsiveVoice.speak(
            "có " + document.querySelectorAll(".result-title").length + " sách"
        );

        // Chon
        chon = true;
        setTimeout(function() {
            recognition.start();
        }, 500);
        // Others
    } else if (grBack.includes(command)) {
        window.history.back();
    } else if (command == "tro lai") {
        window.history.forward();
    } else if (command == "trang chu") {
        window.location.href = "/";
    } else if (command == "theo doi") {
        window.location.href = "/follow";
    } else if (grFollow.includes(command)) {
        let flBtn = document.querySelector(".follow-btn");
        if (flBtn.innerText == " THEO DÕI") {
            responsiveVoice.speak("Đã theo dõi");
        } else {
            responsiveVoice.speak("Huỷ theo dõi");
        }
        setTimeout(function() {
            flBtn.click();
        }, 2000);
    } else if (command == "ket qua") {
        if (pathName.startsWith("/novel")) {
            if (pathName.match(new RegExp("/", "g")).length > 2) {
                responsiveVoice.speak(
                    document.querySelector("#blog-title").innerText
                );
            } else {
                responsiveVoice.speak(
                    "Sách , " + document.querySelector("#anime-title").innerText
                );
            }
        } else {
            // Dem ket qua
            let count = 0;

            // Doc ten sach
            let resultTitle = "";
            resultTitle +=
                "có " +
                document.querySelectorAll(".result-title").length +
                " sách" +
                " , ";
            document.querySelectorAll(".result-title").forEach(title => {
                resultTitle += ++count + " , " + title.innerText + " , ";
            });
            responsiveVoice.speak(resultTitle);
        }
        // Group Detail Page
    } else if (command == "thong tin") {
        let result = document.querySelector("#anime-title").innerText;
        result +=
            ", " + document.querySelector(".anime__details__widget").innerText;
        responsiveVoice.speak(result);
    } else if (command == "tom tat") {
        responsiveVoice.speak(
            document.querySelector("#novel-description").innerText
        );
    } else if (grChuong.includes(command)) {
        if (pathName.startsWith("/novel")) {
            if (pathName.match(new RegExp("/", "g")).length > 2) {
                // Reading
                chuong = true;
                setTimeout(function() {
                    recognition.start();
                }, 500);
            } else {
                // Details
                let chapsEle = document.querySelectorAll(
                    ".chapters__list--item"
                );
                let ctResult = "có " + chapsEle.length + " chương";
                chapsEle.forEach(ele => {
                    ctResult += " , " + ele.innerText;
                });
                responsiveVoice.speak(ctResult);
                document.querySelectorAll(".chapters__list--item");
                ctResult += document.querySelector;
                responsiveVoice.speak();
            }
        } else {
            responsiveVoice.speak("Bạn đang ở trang chủ");
        }
    } else if (
        command.startsWith("chuong ") ||
        command.startsWith("truong ") ||
        command.startsWith("phim ") ||
        command.startsWith("xem ")
    ) {
        // test
    } else if (command == "doc") {
        responsiveVoice.speak(
            document.querySelector("#novel-content").innerText
        );
    } else {
        // Chat with Bot
        typing(mess);
    }
}

// Functions
// Voice Button Click
function checkCrPage() {
    var pathName = window.location.pathname;
    if (pathName == "/") {
        responsiveVoice.speak("Trang chủ");
    }
    if (pathName == "/follow") {
        responsiveVoice.speak("Theo dõi");
    }
    if (pathName.startsWith("/novel")) {
        // let chapter = pathName.split("/").pop();
        if (pathName.match(new RegExp("/", "g")).length > 2) {
            // responsiveVoice.speak("Chương " + chapter);
        } else {
            responsiveVoice.speak("Chi tiết");
        }
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

// Chat with Bot
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

// Search by Name
function searching(name) {
    // Input Typing
    document.querySelector("#search").value = name;
    // Input Enter Key Press
    document.querySelector(".search-model-form").submit();
}

// Search by Category
function cateSearch(cate) {
    let cateResult = categories.find(
        category => removeAccents(category.name).toLowerCase() == cate
    );
    if (cateResult) {
        window.location.href = "/category/" + cateResult.id;
    } else {
        responsiveVoice.speak("Thể loại không tồn tại");
    }
}

// Choose in Search Results
function choose(novel) {
    console.log("novel = " + novel);
    const resultArr = document.querySelectorAll(".result-title a");
    if (novel <= resultArr.length && novel >= 0) {
        resultArr[novel].click();
    } else {
        responsiveVoice.speak("Sách không tồn tại");
    }
}

function chapter(chap) {
    if (chap == "hien tai") {
        responsiveVoice.speak(document.querySelector("#blog-title").innerText);
    } else if (chap == "truoc") {
        let preBtn = document.querySelector(".pre__btn a");
        if (preBtn == undefined) {
            responsiveVoice.speak("Không có chương trước");
        } else {
            preBtn.click();
        }
    } else if (chap == "tiep theo" || chap == "viettel") {
        let nextBtn = document.querySelector(".next__btn a");
        if (nextBtn == undefined) {
            responsiveVoice.speak("Không có chương sau");
        } else {
            nextBtn.click();
        }
    } else {
        responsiveVoice.speak("Xảy ra lỗi");
    }
}

// String to number
function toNum(str) {
    switch (str) {
        case "khong":
            return 0;
            break;
        case "mot":
            return 1;
            break;
        case "hai":
            return 2;
            break;
        case "ba":
            return 3;
            break;
        case "bon":
            return 4;
            break;
        case "nam":
            return 5;
            break;
        case "sau":
            return 6;
            break;
        case "bay":
            return 7;
            break;
        case "tam":
            return 8;
            break;
        case "chin":
            return 9;
            break;
        case "muoi":
            return 10;
            break;
        default:
            return str;
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

// Voice Button
$("#voiceBtn").on("click", function() {
    responsiveVoice.pause();
    checkCrPage();
    startSound.play();
    recognition.start();
});
