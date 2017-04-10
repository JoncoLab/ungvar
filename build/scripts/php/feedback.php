<?php
$host = 'joncolab.mysql.ukraine.com.ua';
$db = 'joncolab_ungadm';
$userName = 'joncolab_saladin';
$userPassword = '2014';

$connection = new mysqli($host, $userName, $userPassword, $db);
if ($connection->connect_error) {
    die('Помилка підключення до бази!');
} else {
    $connection->set_charset('utf8');
    $p = "\r\n";
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $userMessage = $_POST["message"];
    $subject = $_POST["subject"];
    $to = 'joncolab@gmail.com, feedback@ungvar.uz.ua';
    $message = $name . ' пише:' . $p;
    $message .= $userMessage . $p . $p;
    $message .= 'Його контактні дані:' . $p;
    $message .= 'Електронна пошта - ' . $email . $p;
    $message .= 'Мобільний телефон - ' . $tel;
    $headers = 'From: ' . $name . ' <' . $email . '>';

    $sql = 'SELECT * FROM customers_emails WHERE email=\'' . $email . '\'';
    $result = $connection->query($sql);
    if ($result->num_rows === 0) {
        $sql = 'INSERT INTO customers_emails VALUES(\'' . $email . '\')';
        $connection->query($sql);
    }

    mail($to, $subject, $message, $headers);
    mail($email, 'Зворотній зв\'язок', 'Ваше звернення в службу підтримки успішно опрацьоване! Очікуйте на відповідь!', 'From: Ungvar Online <feedback@ungvar.uz.ua>');
}