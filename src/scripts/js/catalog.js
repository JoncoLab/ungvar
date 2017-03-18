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


    $('table.content').DataTable({
        "iDisplayLength": 2
    });


  var avatarElem = document.getElementById('page'),
      avatarSourceTop = avatarElem.getBoundingClientRect().top + window.pageYOffset;
    window.onscroll = function() {
        if (avatarElem.classList.contains('fixed') && window.pageYOffset < avatarSourceTop) {
            avatarElem.classList.remove('fixed'),
            $('#start').css('visibility', 'hidden');
        } else if (window.pageYOffset > avatarSourceTop) {
            avatarElem.classList.add('fixed'),
            $('#start').css('visibility', 'visible');
        }

    };

    var liftSize = $('header').css('height');
    $('#start').click(function () {
        window.scrollTo(0, liftSize);
    });


  var showingCatalog = function () {
      $('.lending-nav td').click(function () {
          $('.lending-nav').css('display', 'none');
          $(".category").css('display', 'block');

          $('.page-navigation').css({
                  'visibility': 'visible'
       });
      });
  };
  showingCatalog();
    $('#category-button').click(function () {
        $('.category-nav').css('display', 'inline-flex');
    })
    $('.category-nav').mouseleave(function () {
        $(this).fadeOut('fast');
    });


  var catalogMarginTop = $('.page-navigation ul').css('height');
    $('section.category').css('margin-top', catalogMarginTop);







});


