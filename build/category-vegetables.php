<?php
mb_internal_encoding('UTF-8');
$category = 'vegetables';
$category_name = 'Овочі та фрукти';

$host = 'joncolab.mysql.ukraine.com.ua';
$userName = 'joncolab_saladin';
$userPassword = '2014';
$db = 'joncolab_ungprod';
$connection = new mysqli($host, $userName, $userPassword, $db);
if ($connection->connect_error) {
    header('Location: /error.html');
    die();
}
$connection->set_charset('utf8');
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="JoncoLab">
    <meta name="description" content="Замовлення продуктів онлайн та їх безкоштовна доставка в місті Ужгороді уже сьогодні.">
    <meta name="keywords" content="<?php print $category_name . ', ' . $category;?>, замовлення, продукти, доставка, безкоштовна доставка, Ужгород, Ungvar, Online, заказ, продукты, бесплатная оставка">
    <title>Ungvar Online - <?php print $category_name;?></title>
    <link href="styles/categories.css" rel="stylesheet">
    <script src="scripts/js/jquery-3.1.1.js"></script>
    <script src="scripts/js/common.js"></script>
    <script src="scripts/js/categories.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?php
include "modules/header.html";
include "modules/catalog-navigation.html";
?>
<main>
    <section class="content">
        <div class="content-manage">
            <div class="heading">
                <hr>
                <h2><?php print $category_name;?></h2>
                <hr>
            </div>
            <div class="search">
                <label for="search">Пошук:</label>
                <input type="search" name="search" placeholder="Введіть запит" id="search">
                <button id="search-button">Знайти</button>
            </div>
        </div>
        <ul class="items">
            <?php
            $sql = 'SELECT id, `name`, cost FROM ' . $category;
            $items = $connection->query($sql);
            while ($item = $items->fetch_assoc()) {
                echo
                '<li class="item" data-id="' . $item["id"] . '">' .
                '<img src="products/' . $category . '/' . $item["id"] . '.JPG">' .
                '<h4 class="name">' . $item["name"] . '</h4>' .
                '<h4 class="price button">' . $item["cost"] . ' грн.</h4>' .
                '</li>';
            }
            $connection->close();
            ?>
        </ul>
    </section>
    <?php
    include "modules/full-screen-feedback.html";
    ?>
    <aside class="add empty"></aside>
</main>
<?php
include "modules/footer.html";
?>
</body>
</html>