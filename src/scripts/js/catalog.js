'use strict';
// var main;
// main = function () {
//     var header = $('header'),
//         main = $('main');
//     main.css({
//         'padding-top': header.css('height'),
//         'transition': '1s linear'
//     })
// };
// $(document).ready(main);

$(document).ready(function () {
  $('#input1').change(function () {
    $('#input2').val($(this).val());
  });


  var avatarElem = document.getElementById('page'),
      avatarSourceTop = avatarElem.getBoundingClientRect().top + window.pageYOffset;
    window.onscroll = function() {
        if (avatarElem.classList.contains('fixed') && window.pageYOffset < avatarSourceTop) {
            avatarElem.classList.remove('fixed');
        } else if (window.pageYOffset > avatarSourceTop) {
            avatarElem.classList.add('fixed');
        }
    };

  var showingCatalog = function () {
      $('.lending-nav td').click(function () {
          $('.lending-nav').css('display', 'none');

          $('.page-navigation').css({
                  'visibility': 'visible'
       });

          $('.content').css('display', 'table');
      });
  };
  showingCatalog();

  var catalogMarginTop = $('.page-navigation ul').css('height');
    $('table.content').css('margin-top', catalogMarginTop);

});