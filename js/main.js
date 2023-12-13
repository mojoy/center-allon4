/***********************
 Input mask BEGIN
 ***********************/

$(document).ready(function() {

function survey() {


    const btnSurvey = document.querySelector(".survey-form");

    if (btnSurvey) {
        var tab = 1;
        $(".survey-form .survey-button--next").bind("click", function () {
            tab = tab + 1;
            $(".sf-input-group").each(function () {
                $(this).hide();
                if ($(this).attr("rel") == "step-" + tab) {
                    if (tab > 1) $(".survey-form .survey-button--prev").removeClass("button--disabled");
                    $(this).show();
                    if (tab == 4) $(".survey-form .survey-button--next").hide();
                }
            });
        });
        $(".survey-form .survey-button--prev").bind("click", function () {
            if (tab != 1) {
                tab = tab - 1;
                $(".sf-input-group").each(function () {
                    $(this).hide();
                    if ($(this).attr("rel") == "step-" + tab) {
                        if (tab == 1) $(".survey-form .survey-button--prev").addClass("button--disabled");
                        $(this).show();
                        if (tab < 4) $(".survey-form .survey-button--next").show();
                    }
                });

                // Добавляем проверку для .step4
                if (!$(".step4").is(":hidden")) {
                    $(".st-list").css("display", "none");
                }

            }
        });

        $(".survey-form  .sf-input-button").bind("click", function () {
            var form = $(".survey-form");
            var cont = $(".s-survey").parent().parent();

            $(form).find('.url_remain').attr("value",
                window.location.toString());

            insertPreloader($(cont));
            jQuery(form).ajaxSubmit({
                success: function (data, status) {
                    dropPreloader();
                    if (data != null && data.status == "ok") {
                        jQuery(form).find(".step4").hide();
                        jQuery(form).find(".success").show();
                        $(".survey__content").addClass("survey__content--step4");
                        $(".survey-button--prev").hide();
                    } else {
                        insertErrorCode2Form(jQuery("." + data.elem));
                    }
                },
                beforeSubmit: function () {
                    var err = true;
                    if (jQuery(form).find(".input-text-first_name").val() == "" || jQuery(form).find(".input-text-first_name").val() == "Введите имя*") {
                        insertErrorCode2Form("Заполните обязательное поле", jQuery(form).find(".input-text-first_name"));
                        err = false;
                        dropPreloader();
                        return err;
                    } else {
                        dropErrorCode2Form(jQuery(form).find(".input-text-first_name"));
                        err = true;
                    }

                    if (jQuery(form).find(".input-text-phone").val() == "" || jQuery(form).find(".input-text-phone").val() == "Введите телефон*") {
                        insertErrorCode2Form("Заполните обязательное поле", jQuery(form).find(".input-text-phone"));
                        err = false;
                        dropPreloader();
                        return err;
                    } else {
                        dropErrorCode2Form(jQuery(form).find(".input-text-phone"));
                        err = true;
                    }

                    if (jQuery(form).find(".input-text-phone").val().length < 11) {
                        insertErrorCode2Form("Введите корректный номер. Пример: +79031234567", jQuery(form).find(".input-text-phone"));
                        err = false;
                        dropPreloader();
                    } else {
                        dropErrorCode2Form(jQuery(form).find(".input-text-phone"));
                        err = true;
                    }


                    return err;
                },
                dataType: 'json'
            });

            return false;
        });
    }
};

function init_fancy() {
    $('.fancy').fancybox({
        buttons: ['close'],
        baseClass: "pb",
        smallBtn: true
    });
    $('.fancy-modal').fancybox({
        touch: false,
        baseClass: "pb"
    });
    $('.fancy-map').fancybox({
        toolbar: false,
        smallBtn: true,
        defaultType: "iframe",
        baseClass: "pb"
    });

    $("#reviews .box-inner .show-big").each(function(){
        $(this).attr("data-fancybox","photoline");
        $(this).attr("data-caption",$(this).find("img").attr("alt"));
    });

    $(".s-reviews-list .show-big").each(function(){
        $(this).attr("data-fancybox","photoline");
        $(this).attr("data-caption",$(this).find("img").attr("alt"));
    });

    $(".review-thanks__text .show-big").each(function(){
        $(this).attr("data-fancybox","photoline");
        $(this).attr("data-caption",$(this).find("img").attr("alt"));
    });
    $('a.fancy-form-sign').fancybox(
        {
            'baseClass': "pb"
        }

    );
}

function init_fancy__video() {
    $('.fancy-video').fancybox({
        toolbar: false,
        smallBtn: true,
        baseClass: "pb",
        youtube: {
            controls: 1,
            showinfo: 0,
            autoplay: 1
        }
    });
}

$(function () {
    survey();
    init_fancy();
    setTimeout(function(){
        init_fancy__video();
    },500);


});

    $('.page__sidebar, .sidebar').theiaStickySidebar({
        // Настройки
        additionalMarginTop: 135,
        minWidth: 768,
    });
});


document.addEventListener('DOMContentLoaded',function () {
    const priceVideoSlider = new Swiper ('.photo-gallery', {
        slidesPerView: 3,
        loop: false,
        threshold: 5,
        grabCursor: true,
        watchOverflow: true,
        autoHeight: true,
        on: {
            init: function () {
                const thisSliderWrapper = this.el.parentElement;
                const thisBtnNext = thisSliderWrapper.querySelector('.slider-arrow--next');
                const thisBtnPrev = thisSliderWrapper.querySelector('.slider-arrow--prev');
                this.params.navigation.nextEl = thisBtnNext;
                this.params.navigation.prevEl = thisBtnPrev;
            }
        },
        spaceBetween: 25,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },

            480: {
                slidesPerView: 1,
            }
        }
    });
});


document.addEventListener('DOMContentLoaded',function () {
    const priceVideoSlider = new Swiper ('.photo-gallery', {
        slidesPerView: 3,
        loop: false,
        threshold: 5,
        grabCursor: true,
        watchOverflow: true,
        autoHeight: true,
        on: {
            init: function () {
                const thisSliderWrapper = this.el.parentElement;
                const thisBtnNext = thisSliderWrapper.querySelector('.slider-arrow--next');
                const thisBtnPrev = thisSliderWrapper.querySelector('.slider-arrow--prev');
                this.params.navigation.nextEl = thisBtnNext;
                this.params.navigation.prevEl = thisBtnPrev;
            }
        },
        spaceBetween: 25,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },

            480: {
                slidesPerView: 1,
            }
        }
    });
});


document.addEventListener('DOMContentLoaded',function () {
    const priceVideoSlider = new Swiper ('.doctor-slider', {
        slidesPerView: 5,
        loop: false,
        threshold: 5,
        grabCursor: true,
        watchOverflow: true,
        autoHeight: true,
        on: {
            init: function () {
                const thisSliderWrapper = this.el.parentElement;
                const thisBtnNext = thisSliderWrapper.querySelector('.slider-arrow--next');
                const thisBtnPrev = thisSliderWrapper.querySelector('.slider-arrow--prev');
                this.params.navigation.nextEl = thisBtnNext;
                this.params.navigation.prevEl = thisBtnPrev;
            }
        },
        spaceBetween: 25,
        breakpoints: {

            1000: {
                slidesPerView: 4,
                spaceBetween: 25,
            },

            768: {
                slidesPerView: 3,
                spaceBetween: 25,
            },

            680: {
                slidesPerView: 2,
                spaceBetween: 20,
            },

            480: {
                slidesPerView: 1,
            }
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const hotspotButtons = document.querySelectorAll(".hotspot__spot");


    hotspotButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Находим родительский элемент .hotspot
            const hotspot = button.closest(".hotspot");

            // Проверяем наличие .hotspot-active
            const isActive = hotspot.classList.contains("hotspot-active");

            // Убираем .hotspot-active со всех .hotspot
            document.querySelectorAll(".hotspot").forEach(function(hotspotElement) {
                hotspotElement.classList.remove("hotspot-active");
            });

            // Добавляем/удаляем .hotspot-active для текущего .hotspot
            if (!isActive) {
                hotspot.classList.add("hotspot-active");
            }


            if (button.classList.contains("visible")) {
                button.classList.remove("visible");
            } else {
                hotspotButtons.forEach(function(btn) {
                    btn.classList.remove("visible");
                });
                button.classList.add("visible");
            }
        });
    });
});








document.addEventListener("DOMContentLoaded", function() {
    const menuButtons = document.querySelectorAll(".header-menu__action");
    const menuСlose = document.querySelectorAll(".sidebar-menu__close-menu");
    const menuOverlay = document.querySelector(".sidebar-menu__overlay");
    const menuSidebar = document.querySelector(".sidebar-menu");

    const subMenus = document.querySelectorAll(".sidebar-menu-sub");
    const subMenuButtons = document.querySelectorAll(".sidebar-menu__more");
    const subMenuCloses = document.querySelectorAll(".sidebar-menu__close-current");
    const subMenuBreadcrumbsCloses = document.querySelectorAll(".sidebar-menu-breadcrumbs__link");

    if (menuOverlay) {
        menuButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                if (button.classList.contains("active")) {
                    button.classList.remove("active");
                    menuOverlay.classList.remove("visible");
                    menuSidebar.classList.remove("visible");
                } else {
                    button.classList.add("active");
                    menuOverlay.classList.add("visible");
                    menuSidebar.classList.add("visible");
                }
            });
        });

        menuСlose.forEach(function(closeButton) {
            closeButton.addEventListener("click", function() {
                menuButtons.forEach(function(button) {
                    button.classList.remove("active");
                });
                menuOverlay.classList.remove("visible");
                menuSidebar.classList.remove("visible");
            });
        });

        menuOverlay.addEventListener("click", function() {
            menuButtons.forEach(function(button) {
                button.classList.remove("active");
            });
            menuOverlay.classList.remove("visible");
            menuSidebar.classList.remove("visible");
        });
    }

    subMenuButtons.forEach(function(subMenuButton, index) {
        subMenuButton.addEventListener("click", function() {
            subMenus[index].classList.add("visible");
        });
    });

    subMenuCloses.forEach(function(subMenuClose, index) {
        subMenuClose.addEventListener("click", function() {
            subMenus[index].classList.remove("visible");
        });
    });

    subMenuBreadcrumbsCloses.forEach(function(subMenuClose, index) {
        subMenuClose.addEventListener("click", function() {
            subMenus[index].classList.remove("visible");
        });
    });
});



const hotspotElements = document.querySelectorAll('.hotspot');

hotspotElements.forEach(function(element) {

    const emptyParagraphs = element.querySelectorAll('p:empty');

    emptyParagraphs.forEach(function(paragraph) {
        paragraph.remove();
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    const mainContentInner = document.querySelector(".main-content-inner");
    let prevScrollPos = window.pageYOffset;

    window.addEventListener("scroll", function() {
        const currentScrollPos = window.pageYOffset;

        if (currentScrollPos > prevScrollPos) {
            header.classList.add("hide");
        } else {
            header.classList.remove("hide");
        }

        prevScrollPos = currentScrollPos;
    });
});

/*
document.addEventListener("DOMContentLoaded", function() {
    const wpcf7Elm = document.querySelector( '.wpcf7' );
    const wpcf7Step1 = document.querySelector( '.wpcf7-step1' );
    const wpcf7Step2 = document.querySelector( '.wpcf7-step2' );

    wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
        wpcf7Step1.classList.add("hide");
        wpcf7Step2.classList.remove("hide");
    }, false );

});
*/

document.addEventListener("DOMContentLoaded", function() {
    const wpcf7Elms = document.querySelectorAll('.wpcf7');
    const wpcf7Step1s = document.querySelectorAll('.wpcf7-step1');
    const wpcf7Step2s = document.querySelectorAll('.wpcf7-step2');
    const stepsButtonsList = document.querySelectorAll('.survey-buttons');
    const formInfo = document.querySelectorAll('.wpcf7-response-output');

    wpcf7Elms.forEach(function(wpcf7Elm, index) {
        wpcf7Elm.addEventListener('wpcf7mailsent', function(event) {
            if (event.detail.status === 'mail_sent' && event.detail.apiResponse.status === 'mail_sent') {
                wpcf7Step1s[index].classList.add("hide");
                wpcf7Step2s[index].classList.remove("hide");
                if (stepsButtonsList[index]) {
                    stepsButtonsList[index].style.display = "none";
                }
                if (formInfo[index]) {
                    formInfo[index].style.display = "none";
                }
            }
        }, false);
    });
});







