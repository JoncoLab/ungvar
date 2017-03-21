<!doctype html>
<html>
<head>
    <head>
        <meta charset="UTF-8">
        <title>Ungvar Online - cart</title>
        <link href="styles/cart.css" rel="stylesheet">
        <script src="scripts/js/jquery-3.1.1.js"></script>
        <script src="scripts/js/cart.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
</head>
<body>
<header id="main-header">
    <div class="logo">
        <h1>
            <span class="corner"></span>
            <span class="corner"></span>
            <span class="corner"></span>
            <span class="corner"></span>
            <span class="title">
                <small class="dot">⦁</small>
                <span>UNGVAR</span>
                <small class="dot">⦁</small>
                <span>ONLINE</span>
                <small class="dot">⦁</small>
            </span>
        </h1>
        <div class="corner"></div>
        <div class="corner"></div>
        <div class="corner"></div>
        <div class="corner"></div>
    </div>
    <nav id="customers-info">
        <p>
            <span>Звертаємо увагу користувачів те, що </span>
            <strong>мінімальна сума замовлення становить 200 грн.</strong><br>
            <span>Приємних покупок в</span>
            <strong class="ungvar">Ungvar'і!</strong>
        </p>
        <p>
            <span>Якщо у вас виникли запитання, скарги, чи пропозиції, зв'яжіться з наит одразу за допомогою</span>
            <a href="feedback.html">електронної форми</a>,
            <span>або скористайтеся одним з контактів, які ви знайдете у</span>
            <b class="to-footer">підвалі сайту</b>.
        </p>
    </nav>
</header>
<main>
    <aside class="add empty"></aside>
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
    <aside class="add empty"></aside>
</main>
<footer>
    <aside class="add empty"></aside>
    <table class="contacts">
        <tbody>
        <tr class="mail">
            <td class="name">Електронна пошта:</td>
            <td class="icon"><img src="SVG/cart.svg"></td>
            <td class="value">info@ungvar.com</td>
        </tr>
        <tr class="tel">
            <td class="name">Телефон:</td>
            <td class="icon"><img src="SVG/cart.svg"></td>
            <td class="value">+380 (95) 498 82 73 (Олексій)</td>
        </tr>
        <tr class="addresses">
            <td class="name">Адреси:</td>
            <td class="icon"><img src="SVG/cart.svg"></td>
            <td class="value">
                <ul>
                    <li>Ужгород, вул. Донського, 1</li>
                    <li>Ужгород, просп. Свободи, 50</li>
                    <li>Ужгород, вул. Минайська, 2</li>
                </ul>
            </td>
        </tr>
        </tbody>
    </table>
</footer>
<script src="scripts/js/adds.js"></script>
</body>
</html>