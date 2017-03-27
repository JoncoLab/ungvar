'use strict';
var commonSettings = function () {
    var adds = $('aside.add'),
        mainHeaderSliders = $('#main-header').find('p'),
        fullScreenFeedbackForm = $('.full-screen-feedback'),
        fullScreenFeedbackButton = $('.full-screen-feedback-button'),
        fullScreenFeedbackCloseButton = $('#feedback').find('.feedback-close'),
        toFooterButton = $('.to-footer');

    adds.each(function () {
        if ($(this).is('.empty')) {
            var height = parseInt($(this).css('height').substr(0, $(this).css('height').length - 2)),
                width = parseInt($(this).css('width').substr(0, $(this).css('width').length - 2)),
                html = '<h5>' +
                    '<span>Місце для вашої реклами</span><br>' +
                    '<small>(' + width + ' * ' + height + ' px)</small><br>' +
                    '<small>+380 (95) 177 23 52</small>' +
                    '</h5>';
            $(this).html(html);
        }
    });

    mainHeaderSliders.click(function () {
        var shown = $('.shown');
        if (!$(this).is(shown)) {
            shown.removeClass('shown');
            $(this).addClass('shown');
        } else {
            shown.removeClass('shown');
        }
        shown.css('z-index', '10');
    });

    fullScreenFeedbackButton.click(function () {
        fullScreenFeedbackForm.fadeIn({
            duration: 300,
            start: function () {
                fullScreenFeedbackForm.css('display', 'flex');
            }
        });
    });

    fullScreenFeedbackCloseButton.click(function () {
        fullScreenFeedbackForm.fadeOut(300);
    });

    toFooterButton.click(function () {
        var page = $('body, html'),
            bottom = $('main').height();
        page.animate({scrollTop: bottom}, 2000, 'swing');
    });
};
$(document).ready(commonSettings);

