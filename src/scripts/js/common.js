var commonSettings = function () {
    var adds = $('aside.add'),
        // mainHeaderSliders = $('#main-header').find('p'),
        fullScreenFeedbackBar = $('.full-screen-feedback'),
        fullScreenFeedbackForm = $('#feedback'),
        fullScreenFeedbackButton = $('.full-screen-feedback-button'),
        fullScreenFeedbackCloseButton = fullScreenFeedbackForm.find('.feedback-close'),
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

    //Скріпт для корзини

    var cart = $('#cart-section'),
        closeButton = $('.сart-close-button'),
        openButton = $('.cart-open-button'),
        cartOverlay = $('.cart-overlay');

    closeButton.click(function () {
        cart.fadeToggle();
        cartOverlay.fadeToggle();
    })

    openButton.click(function() {
        cart.fadeToggle();
        cartOverlay.fadeToggle();
    });

    $('.delete-item').click(function () {
        this.parent($('#cart-item')).remove('fast');
    });

    //Скріпт фідбека

    fullScreenFeedbackButton.click(function () {
        fullScreenFeedbackBar.fadeIn({
            duration: 300,
            start: function () {
                fullScreenFeedbackBar.css('display', 'flex');
            }
        });
    });

    fullScreenFeedbackCloseButton.click(function () {
        fullScreenFeedbackBar.fadeOut(300);
    });

    fullScreenFeedbackForm.submit(function (event) {
        var name = $('#feedback-name').val(),
            tel = $('#feedback-tel').val(),
            email = $('#feedback-email').val(),
            subject = $('#feedback-subject').val(),
            message = $('#feedback-message').val();
            $.ajax({
                url: 'scripts/php/feedback.php',
                data: {
                    name: name,
                    tel: tel,
                    email: email,
                    subject: subject,
                    message: message
                },
                method: 'post',
                error: function () {
                    alert('На жаль, сталася помилка! Спробуйте трохи згодом!');
                },
                success: function () {
                    alert('Ваше звернення в службу підтримки успішно опрацьоване! Очікуйте на відповідь!');
                },
                complete: function () {
                    fullScreenFeedbackBar.fadeOut(300);
                }
            });
        event.preventDefault();
    });

    toFooterButton.click(function () {
        var page = $('body, html'),
            bottom = $('main').height();
        page.animate({scrollTop: bottom}, 2000, 'swing');
    });

};

$(document).ready(commonSettings);

window.onload = function () {
    var preloader = document.getElementById('preloader'),
        page = $('body');
    preloader.classList.add('loaded');
    page.addClass('visible');
};