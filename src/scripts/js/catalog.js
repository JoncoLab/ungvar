'use strict';
var main;
main = function () {
    $('table').DataTable({
        "iDisplayLength": 3
    });

    var searchField = $("#search").val();
};
$(document).ready(main);/**
 * Created by Василий on 01.03.2017.
 */
