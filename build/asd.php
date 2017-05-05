<?php
mb_internal_encoding('UTF-8');
#category = asd;
#category_name = asd;

 = 'joncolab.mysql.ukraine.com.ua';
 = 'joncolab_saladin';
 = '2014';
 = 'joncolab_ungprod';
 = new mysqli(, , , );
if (>connect_error) {
    header('Location: /error.html');
    die();
}
>set_charset('utf8');
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Ungvar Online - <?php print asd;?></title>
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
                <h2><?php print asd;?></h2>
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
             = 'SELECT id, `name`, cost FROM ' . asd;
             = >query();
             = 0;
            while ( = >fetch_assoc()) {
                echo
                '<li class="item">' .
                '<img src="products/' . asd . '/' . $item["id"] . '.JPG">' .
                '<h4 class="name">' . $item["name"] . '</h4>' .
                '<h4 class="price button">' . $item["cost"] . ' грн.</h4>' .
                '</li>';
                if ( == 15) {
                    break;
                }
                ++;
            }
            >close();
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