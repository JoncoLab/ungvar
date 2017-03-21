'use strict';
var main = function () {
    var avatarElem = document.getElementById('page'),
        avatarSourceTop = avatarElem.getBoundingClientRect().top + window.pageYOffset,
        startButton = $('#start-button'),
        searchBar = document.getElementById('search'),
        searchButton = $('#search-button'),
        categoriesButton = $('#categories-button'),
        categoriesNav = $('.categories-nav'),
        catalogNavMenu = $('.main-navigation'),
        items = $('.items .item'),
        currentCategoryName = $('html').data('category'),
        pageTitle = $('head title'),
        pageHeading = $('.heading h2'),
        setPaddingForMain = function () {
            var main = $('main'),
                navHeight = catalogNavMenu.css('height'),
                navBorderWidth = catalogNavMenu.css('border-width'),
                tagetPadding = parseInt(navHeight.substr(0, navHeight.length - 2)) + parseInt(navBorderWidth.substr(0, navBorderWidth.length - 2));
            main.css('padding-top', tagetPadding);
        };

    pageTitle.append(' - ' + currentCategoryName);
    pageHeading.text(currentCategoryName);

    window.onscroll = function() {
        if (avatarElem.classList.contains('fixed') && window.pageYOffset < avatarSourceTop) {
            avatarElem.classList.remove('fixed');
            startButton.css('opacity', '0');
        } else if (window.pageYOffset > avatarSourceTop) {
            avatarElem.classList.add('fixed');
            startButton.css('opacity', '1');
        }

    };

    startButton.click(function () {
        var page = $('body, html');
        page.animate({scrollTop: 0}, 2000, 'swing');
    });

    searchBar.oninput = function () {
        if (this.value === '') {
            items.show();
        }
    };

    searchButton.click(function () {
        var userSearch = searchBar.value.split(' ');
        items.each(function () {
            var currentItem = $(this);
            for (var i = 0; i < userSearch.length; i++) {
                if (currentItem.is(':contains(' + userSearch[i] + ')') || currentItem.is(':contains(' + userSearch[i].toLowerCase() + ')') || currentItem.is(':contains(' + userSearch[i].toUpperCase() + ')')) {
                    currentItem.show();
                }
            }
        });
    });

    categoriesButton.click(function () {
        var categoriesNavItems = categoriesNav.children('li');
        if (categoriesNav.css('display') === 'none') {
            categoriesNav.fadeIn();
            categoriesNavItems.css('opacity', '1');
            setTimeout(function () {
                categoriesNavItems.addClass('backwards');
            }, 800);
        } else {
            categoriesNavItems.css('opacity', '0');
            setTimeout(function () {
                categoriesNavItems.removeClass('backwards');
                categoriesNav.fadeOut();
            }, 800);
        }
    });

    catalogNavMenu.css({
        'transform': 'none'
    });
    setPaddingForMain();
};

$(document).ready(main);


