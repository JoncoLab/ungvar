// 'use strict';
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
});