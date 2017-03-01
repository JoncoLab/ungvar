/**
 * Created by Saladin on 01.03.2017.
 */
var main = function () {
    var removeItem = function (item) {
        item.remove();
    },
        items = $('.items tbody tr'),
        amountInputs = $('.amount input'),
        removeButtons = $('.items .remove img'),
        prices = $('.items .price strong'),
        setPrices = function () {
            prices.each(function () {
                var cell = $(this).parentsUntil(items),
                    amountCell = cell.siblings('.amount'),
                    input = amountCell.children('input'),
                    amount = input.val(),
                    price = parseFloat($(this).data('price')) * amount;
                $(this).text(price);
            });
        },
        sum = $('.items .sum'),
        setSum = function () {
            var sumToBe = 0,
                currentPrices = $('.items .price strong');
            currentPrices.each(function () {
                sumToBe += parseFloat($(this).text());
            });
            sum.text(sumToBe);
        };
    removeButtons.click(function () {
        var cell = $(this).parents('td'),
            item = cell.parents('tr');
        removeItem(item);
        setSum();
    });
    amountInputs.change(function () {
        if ($(this).val() <= 0) {
            $(this).val(1);
        }
        setPrices();
        setSum();
    });
    setPrices();
    setSum();
};
$(document).ready(main);