

<!doctype html>
<html>
<head>
    <head>
        <meta charset="UTF-8">
        <title>Ungvar Online</title>
        <link href="styles/cart.css" rel="stylesheet">
        <script src="scripts/js/jquery-3.1.1.js"></script>
        <script src="scripts/js/cart.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
</head>
<body>
//= modules/header.html
<main>
    <aside class="add">
        <a href="#">
            Place for your add (100 * 300)
        </a>
    </aside>
    <section class="content">
        <table class="items">
            <thead>
            <tr>
                <th class="img"></th>
                <th class="name">Найменування</th>
                <th class="amount">Кількість</th>
                <th class="price">Вартість, грн.</th>
                <th class="remove">Видалити</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="img">
                    <img src="images/beer-tmp.png">
                </td>
                <td class="name">
                    <h3>
                        <span>Пиво "Корона Екстра"</span><br>
                        <small>0.5 л.</small>
                    </h3>

                </td>
                <td class="amount">
                    <input type="number" min="1" maxlength="3" value="1">
                </td>
                <td class="price">
                    <strong data-price="22.5"></strong>
                </td>
                <td class="remove">
                    <img class="remove-icon" src="SVG/cross.svg">
                </td>
            </tr>
            <tr>
                <td class="img">
                    <img src="images/beer-tmp.png">
                </td>
                <td class="name">
                    <h3>
                        <span>Пиво "Корона Екстра"</span><br>
                        <small>0.5 л.</small>
                    </h3>

                </td>
                <td class="amount">
                    <input type="number" min="1" maxlength="3" value="1">
                </td>
                <td class="price">
                    <strong data-price="22.5"></strong>
                </td>
                <td class="remove">
                    <img class="remove-icon" src="SVG/cross.svg">
                </td>
            </tr>
            <tr>
                <td class="img">
                    <img src="images/beer-tmp.png">
                </td>
                <td class="name">
                    <h3>
                        <span>Пиво "Корона Екстра"</span><br>
                        <small>0.5 л.</small>
                    </h3>

                </td>
                <td class="amount">
                    <input type="number" min="1" maxlength="3" value="1">
                </td>
                <td class="price">
                    <strong data-price="22.5"></strong>
                </td>
                <td class="remove">
                    <img class="remove-icon" src="SVG/cross.svg">
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <span>Загальна вартість:</span><br>
                </td>
                <td>
                    <strong class="sum"></strong><span> грн.</span>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2" class="button">
                    <button type="submit" id="submit-button">Підтвердити замовлення</button>
                </td>
            </tr>
            </tfoot>
        </table>
        <div class="full-screen-confirmation">
            <form id="confirmation" action="scripts/php/confirm.php" method="post">
                <img class="close" src="SVG/cross.svg">
                <fieldset id="order-summary">
                    <input type="hidden" id="order-number" name="order-number">
                    <input type="hidden" id="total-sum" name="total-sum">
                    <p>
                        <span>Ви підтверджуєте замовлення на загальну суму </span>
                        <strong class="total-sum"></strong>
                        <span> грн.</span>
                    </p>
                </fieldset>
                <fieldset id="payment">
                    <legend>Як ви бажаєте здійснити оплату?</legend>
                    <input type="radio" name="payment-method" id="payment-method-cash" value="cash" required>
                    <label for="payment-method-cash">Готівкою</label>
                    <input type="radio" name="payment-method" id="payment-method-card" value="card" required>
                    <label for="payment-method-card">Приват 24</label>
                </fieldset>
                <fieldset id="contact-info">
                    <legend>Ваші контактні дані:</legend>
                    <label for="name">Прізвище та ім'я:</label>
                    <input type="text" name="name" id="name" required pattern="^[А-Яа-яЁёІіЇї\s]+$"><br>
                    <label for="tel">Контактний телефон:</label>
                    <input type="tel" name="tel" id="tel" required><br>
                    <label for="email">Електронна пошта:</label>
                    <input type="email" name="email" id="email">
                </fieldset>
                <fieldset id="order-address">
                    <legend>
                        <span>Адреса доставки:</span><br>
                        <small>Доставка здійснюється лише в м. Ужгороді</small>
                    </legend>
                    <label for="street">Вулиця:</label>
                    <input type="text" id="street" name="street" required><br>
                    <label for="building">Будинок:</label>
                    <input type="text" id="building" name="building" required>
                </fieldset>
                <div class="g-recaptcha" data-sitekey="6Lf_WhgUAAAAAGpeD-cO3aEm4zT_GLC-9uuSmIon"></div>
                <p>
                    Незабаром з вами зв'яжеться наш менеджер для уточнення деталей замовлення.
                </p>
                <input type="submit" name="submit" id="submit">
                <label for="submit">Підтвердити</label>
            </form>
        </div>
    </section>
    <aside class="add">
        <a href="#">
            Place for your add (100 * 300)
        </a>
    </aside>
</main>
//= modules/footer.html
</body>
</html>