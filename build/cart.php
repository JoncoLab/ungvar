<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ungvar Online - Cart</title>
    <link href="styles/cart.css" rel="stylesheet">
    <script src="scripts/js/jquery-3.1.1.js"></script>
    <script src="scripts/js/cart.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<header id="main-header">
    <a class="logo" href="index.html">
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
    </a>
    <nav id="customers-info">
        <p>
            <span class="label"></span>
            <span>Звертаємо увагу користувачів те, що за умови </span>
            <strong>замовлення на суму від 200 грн. - доставка безкоштовна!</strong><br>
            <span>Приємних покупок в</span>
            <strong class="ungvar">Ungvar!</strong>
        </p>
        <p>
            <span class="label"></span>
            <span>Якщо у вас виникли запитання, скарги, чи пропозиції, зв'яжіться з нами за допомогою</span>
            <b class="full-screen-feedback-button">електронної форми</b>,
            <span>або скористайтеся одним з контактів, які ви знайдете у</span>
            <b class="to-footer">підвалі сайту</b>.
        </p>
    </nav>
</header>
<main>
    <a class="to-catalog" href="index.html">
        <img src="SVG/catalog.svg">
        <span>Назад до покупок</span>
    </a>
    <aside class="add empty"></aside>
    <section class="content">
        <table class="items">
            <thead>
            <tr>
                <th class="num">№</th>
                <th class="img"></th>
                <th class="name">Найменування</th>
                <th class="amount">Кількість</th>
                <th class="price">Вартість, грн.</th>
                <th class="remove">Видалити</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="num">1</td>
                <td class="img">
                    <img src="images/IMG_9979.png">
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
                    <img class="remove-icon" src="SVG/cross-dark.svg">
                </td>
            </tr>
            <tr>
                <td class="num">1</td>
                <td class="img">
                    <img src="images/IMG_9979.png">
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
                    <img class="remove-icon" src="SVG/cross-dark.svg">
                </td>
            </tr>
            <tr>
                <td class="num">1</td>
                <td class="img">
                    <img src="images/IMG_9979.png">
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
                    <img class="remove-icon" src="SVG/cross-dark.svg">
                </td>
            </tr>
            <tr>
                <td class="num">1</td>
                <td class="img">
                    <img src="images/IMG_9979.png">
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
                    <img class="remove-icon" src="SVG/cross-dark.svg">
                </td>
            </tr>
            <tr>
                <td class="num">1</td>
                <td class="img">
                    <img src="images/IMG_9979.png">
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
                    <img class="remove-icon" src="SVG/cross-dark.svg">
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <span>Загальна вартість:</span><br>
                </td>
                <td colspan="2">
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
            <form id="confirmation" action="form-order.php" method="post">
                <img class="close" src="SVG/cross.svg">
                <fieldset id="order-summary">
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
                    <input type="text" name="name" id="name" required minlength="5" pattern="^[А-Яа-яЁёІіЇї]+[\S\s]+[А-Яа-яЁёІіЇї]+$" placeholder="Олексій Ярош"><br>
                    <label for="tel">Контактний телефон:</label>
                    <input type="tel" name="tel" id="tel" pattern="[+]380[0-9]{9}" placeholder="+380954988273" required><br>
                    <label for="email">Електронна пошта:</label>
                    <input type="email" name="email" id="email" placeholder="example@ungvar.com">
                </fieldset>
                <fieldset id="order-address">
                    <legend>
                        <span>Адреса доставки:</span><br>
                        <small>Доставка здійснюється лише в м. Ужгороді</small>
                    </legend>
                    <label for="street">Вулиця:</label>
                    <input type="text" id="street" name="street" placeholder="просп. Перемоги" required><br>
                    <label for="building">Будинок:</label>
                    <input type="number" id="building" name="building" min="1" max="500" required>
                </fieldset>
                <div class="g-recaptcha" data-sitekey="6LcRNxwUAAAAABLEZRjjQmlYRvktTzj2ktr6sJCK"></div>
                <p>
                    Незабаром з вами зв'яжеться наш менеджер для уточнення деталей замовлення.
                </p>
                <input type="submit" name="submit" id="submit">
                <label for="submit">Підтвердити</label>
            </form>
        </div>
    </section>
    <section class="full-screen-feedback">
        <form id="feedback" action="scripts/php/confirm.php" method="post">
            <img class="feedback-close" src="SVG/cross.svg">
            <label for="feedback-name">Прізвище та ім'я:</label>
            <input type="text" name="feedback-name" id="feedback-name" minlength="5" required pattern="^[А-Яа-яЁёІіЇї]+[\S\s]+[А-Яа-яЁёІіЇї]+$" placeholder="Олексій Ярош"><br>
            <label for="feedback-tel">Контактний телефон:</label>
            <input type="tel" name="feedback-tel" id="feedback-tel" pattern="[+]380[0-9]{9}" placeholder="+380954988273" required><br>
            <label for="feedback-email">Електронна пошта:</label>
            <input type="email" name="feedback-email" id="feedback-email" placeholder="example@ungvar.com" required><br>
            <label for="feedback-message">Ваше повідомлення:</label><br>
            <textarea required id="feedback-message" name="feedback-massage" cols="50" rows="8" maxlength="500" placeholder="Текст вашого повідомлення..."></textarea>
            <input type="submit" name="feedback-submit" id="feedback-submit">
            <label for="feedback-submit">Підтвердити</label>
        </form>
    </section>
    <aside class="add empty"></aside>
</main>
<footer>
    <aside class="add">
        <a href="https://hashflare.io/r/EA5CFE8C-ungvar">
            <img src="https://cdn.hashflare.eu/banners/ru/d4_g_468x60_ru.gif?v=4" alt="HashFlare">
        </a>
    </aside>
    <aside class="add">
        <a href="https://cryptopay.me/join/0388661c" target="_blank">
            <img src="http://adv.cryptopay.me/referrals/RB_468x60_Animated.gif" width="460" height="60"/>
        </a>
    </aside>
    <table class="contacts">
        <tbody>
        <tr class="mail">
            <td class="name">Електронна пошта:</td>
            <td class="icon"><img src="SVG/email.svg"></td>
            <td class="value">info@ungvar.com</td>
        </tr>
        <tr class="tel">
            <td class="name">Телефон:</td>
            <td class="icon"><img src="SVG/tel.svg"></td>
            <td class="value">+380 (95) 498 82 73 (Олексій)</td>
        </tr>
        <tr class="addresses">
            <td class="name">Адреси:</td>
            <td class="icon"><img src="SVG/address.svg"></td>
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
    <div class="info">
        <span>Cайт озроблено кампанією "Joncolab"</span>
        <span>© 2017 ungvar.uz.ua</span>
    </div>
</footer>
<script src="scripts/js/common.js"></script>
</body>
</html>