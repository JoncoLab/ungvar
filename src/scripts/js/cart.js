/**
 * Created by Saladin on 01.03.2017.
 */
var main = function () {
    var items = $('.items tbody tr'),
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
        setNumbers = function () {
            var numberCells = $('.items tbody .num');
            numberCells.each(function (iterator) {
                $(this).text(iterator + 1);
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
        },
        fullScreenConfirmationButton = $('#submit-button'),
        fullScreenConfirmation = $('.content .full-screen-confirmation'),
        fullScreenConfirmationCloseButton = $('.full-screen-confirmation .close'),
        header = $('#main-header');

    removeButtons.click(function () {
        var cell = $(this).parents('td'),
            item = cell.parents('tr');
        item.remove();
        setNumbers();
        setSum();
    });

    amountInputs.change(function () {
        if ($(this).val() <= 0) {
            $(this).val(1);
        }
        setPrices();
        setSum();
    });

    fullScreenConfirmationButton.click(function () {
        var requiredSum = sum.text(),
            totalSum = $('strong.total-sum'),
            totalSumInput = $('#total-sum');
        totalSum.text(requiredSum);
        totalSumInput.val(requiredSum);
        fullScreenConfirmation.fadeIn({
            duration: 300,
            start: function () {
                fullScreenConfirmation.css('display', 'flex');
            }
        });
    });

    fullScreenConfirmationCloseButton.click(function () {
        fullScreenConfirmation.fadeOut(300);
    });

    setNumbers();
    setPrices();
    setSum();
};
$(document).ready(main);