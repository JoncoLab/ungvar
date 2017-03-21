'use strict';
var setAdds = function () {
    var adds = $('aside.add');
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
};
$(document).ready(setAdds);

