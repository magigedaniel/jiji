$('#banImg').one('load', function () {
    setHeight();
});
$(document).ready(function () {
    if ($(document).scrollTop() > 0) {
        $('header').addClass('shrink');
    }
    setHeight();
    $('#mobNav').on('click', function () {
        if ($(this).hasClass('active')) {
            $('#colorNav').slideUp('fast', function () {
                $('#mobNav').removeClass('active');
            });
        } else {
            $('#colorNav').slideDown('fast', function () {
                $('#mobNav').addClass('active');
            })
        }
    });
});
$(document).on('click', '#mobNav', function () {
    $('body').toggleClass('expanded');
});
$(document).on('click', '#colorNav li.parentMenus', function () {
    $(this).find('.menu-bg').toggleClass('active')
});
$(function () {
    var shrinkHeader = 300;
    $(window).scroll(function () {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkHeader) {
            $('header').addClass('shrink');
        } else {
            $('header').removeClass('shrink');
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});
function setHeight() {
    var _W,
    _H,
    imgH,
    div;
    _W = $(window).width();
    _H = $(window).height();
    imgH = $('#banImg').outerHeight(true);
    div = $('#banner');
    div.css({
        height: imgH
    });
    if (imgH == 0) {
        console.log('some error occured please reload page');
    }
}
$(window).resize(function () {
    setHeight();
    if ($(window).width() > 1025) {
        $('#colorNav').removeAttr('style');
    }
});
function addVisibility(ele) {
    $(ele).css({
        visibility: 'hidden'
    });
}
function remVisibility(ele) {
    $(ele).removeAttr('style');
}
