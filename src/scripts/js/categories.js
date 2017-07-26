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
        categoriesNavItems = categoriesNav.children('li'),
        items = $('.items .item'),
        setPaddingForMain = function () {
            var main = $('main'),
                navHeight = catalogNavMenu.css('height'),
                navBorderWidth = catalogNavMenu.css('border-width'),
                tagetPadding =
                    parseInt(navHeight.substr(0, navHeight.length - 2)) +
                    parseInt(navBorderWidth.substr(0, navBorderWidth.length - 2));
            main.css('padding-top', tagetPadding);
        };

    catalogNavMenu.css({
        'transform': 'none'
    });
    setPaddingForMain();

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
        var userSearch = searchBar.value
            .replace(/ "/g, ' ')
            .replace(/-/g, ' ')
            .replace(/" /g, ' ')
            .toLowerCase()
            .split(' ');
        items.hide();
        items.each(function () {
            var currentItem = $(this),
                currentNameWords = currentItem.children('.name').text()
                    .toString()
                    .replace(/ "/g, ' ')
                    .replace(/-/g, ' ')
                    .replace(/" /g, ' ')
                    .toLowerCase()
                    .split(' ');
            for (var i = 0; i < currentNameWords.length; i++) {
                for (var j = 0; j < userSearch.length; j++) {
                    if (currentNameWords[i].includes(userSearch[j]) || userSearch[j].includes(currentNameWords[i])) {
                        currentItem.show();
                    }
                }
            }
        });
    });

    categoriesButton.click(function () {
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

    items.click(function () {
        if (!$(this).is('.opened')) {
            var img = $(this).children('img').attr('src'),
                name = $(this).children('.name').text(),
                price = $(this).children('.price').text(),
                id = $(this).getData('id'),
                detailsBar = '' +
                    '<div class="details">' +
                    '<img src="' + img + '">' +
                    '<form class="buy-item">' +
                    '<h4 class="name">' + name + '</h4>' +
                    '<h4 class="price">' + price + '</h4>' +
                    '<label for="amount">Кількість: </label>' +
                    '<input type="number" id="amount" name="1" min="1">' +
                    '<button class="add-to-cart-button" type="button" onclick="addToCart(' + id + ', ' + 'amount);">В кошик</button>' +
                    '</form>' +
                    '</div>',
                openedDetailsBar = $('.details');
            openedDetailsBar.hide(300, function () {
                $(this).remove();
            });
            $('.item.opened').removeClass('opened');
            $(this).addClass('opened');
            $(this).append(detailsBar);
            var bar = $(this).children('.details');
            bar.show({
                duration: 300,
                start: function () {
                    bar.css('display', 'flex');
                }
            });
        }
    });

    $(document).mouseup(function (e) {
        var detailsBarToClose = $('.details'),
            menuToClose = categoriesNav;
        if (detailsBarToClose.has(e.target).length === 0 && items.has(e.target).length === 0) {
            detailsBarToClose.hide(300, function () {
                detailsBarToClose.remove();
                $('.item.opened').removeClass('opened');
            });
        }
        if (menuToClose.has(e.target).length === 0 && categoriesNav.css('display') !== 'none') {
            categoriesNavItems.css('opacity', '0');
            setTimeout(function () {
                categoriesNavItems.removeClass('backwards');
                categoriesNav.fadeOut();
            }, 800);
        }
    });
},
    addToCart = function (id, amount) {
        var counter = $('#cart-button .counter');
        $.ajax({
            url: 'scripts/php/addToCart.php',
            data: {
                id: id,
                amount: amount
            },
            method: post,
            dataType: 'text',
            success: function (data) {
                //data вертає к-ть продуктів в корзині
                counter.text(data);
            },
            error: function () {
                alert('ERROR!!!');
            },
            complete: function () {

            }
        });
    };

$(document).ready(main);


