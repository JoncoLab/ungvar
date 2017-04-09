<?php
/**
 * Created by PhpStorm.
 * User: Saladin
 * Date: 26.03.2017
 * Time: 20:12
 */
$host = '127.0.0.1';
$db = 'admin';
$userName = 'ungvar';
$userPassword = '1234';
$connection = new mysqli($host, $userName, $userPassword, $db);
if ($connection->connect_error) {
    die('Помилка підключення до бази!');
} else {
    $sql = 'SELECT id FROM archive WHERE id=(SELECT MAX(id) FROM archive)';
    $request = $connection->query($sql);
    $result = $request->fetch_assoc();
    $orderNumber = $result["id"] + 1;

    $totalSum = $_POST['total-sum'];
    $paymentMethod = $_POST['payment-method'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $building = $_POST['building'];
    $address = $street . ', ' . $building;
    function getUkDay() {
        $day = null;
        switch (date('l')) {
            case 'Sunday':
                $day = 'Неділя';
                break;
            case 'Monday':
                $day = 'Понеділок';
                break;
            case 'Tuesday':
                $day = 'Вівторок';
                break;
            case 'Wednesday':
                $day = 'Середа';
                break;
            case 'Thursday':
                $day = 'Четвер';
                break;
            case 'Friday':
                $day = 'П\'ятниця';
                break;
            case 'Saturday':
                $day = 'Субота';
                break;
        }
        return $day;
    }
    function getUkMonth() {
        $month = null;
        switch (date('m')) {
            case '01':
                $month = 'Січня';
                break;
            case '02':
                $month = 'Лютого';
                break;
            case '03':
                $month = 'Березня';
                break;
            case '04':
                $month = 'Квітня';
                break;
            case '05':
                $month = 'Травня';
                break;
            case '06':
                $month = 'Червня';
                break;
            case '07':
                $month = 'Липня';
                break;
            case '08':
                $month = 'Серпня';
                break;
            case '09':
                $month = 'Вересня';
                break;
            case '10':
                $month = 'Жовтня';
                break;
            case '11':
                $month = 'Листопада';
                break;
            case '12':
                $month = 'Грудня';
                break;
        }
        return $month;
    }
    function get24hTime() {
        $time = null;
        if (date("a") === 'pm') {
            switch (date("h")) {
                case '01':
                    $time = '13:' . date("i");
                    break;
                case '02':
                    $time = '14:' . date("i");
                    break;
                case '03':
                    $time = '15:' . date("i");
                    break;
                case '04':
                    $time = '16:' . date("i");
                    break;
                case '05':
                    $time = '17:' . date("i");
                    break;
                case '06':
                    $time = '18:' . date("i");
                    break;
                case '07':
                    $time = '19:' . date("i");
                    break;
                case '08':
                    $time = '20:' . date("i");
                    break;
                case '09':
                    $time = '21:' . date("i");
                    break;
                case '10':
                    $time = '22:' . date("i");
                    break;
                case '11':
                    $time = '23:' . date("i");
                    break;
                default:
                    $time = date("h:i");
            }
        } else {
            $time = date("h:i");
        }
        return $time;
    }
    function listItems() {
        $itemsList = null;
        // на основі номерів отриманих з форми витягнути з бази даних продутки і перерахувати їх
        return $itemsList;
    }
    $dateAndTime = getUkDay() . ', ' . date("d") . ' ' . getUkMonth() . ' ' . date("Y") . ', о ' . get24hTime();
    $p = "\r\n";
    $to = 'nem97.sv@gmail.com';
    $subject = 'Замовлення №' . $orderNumber;
    $headers = 'From: ' . $name;
    $message = 'Нове замовлення!' . $p;
    $message .= '№ Замовлення: ' . $orderNumber . $p;
    $message .= 'Замовник: ' . $name . $p;
    $message .= 'Мобільний для зв\'язку: ' . $tel . $p;
    $message .= ($email === '') ? ('Електронної пошти не залишив.' . $p) : ('Електронна пошта: ' . $email . $p);
    $message .= 'Позиції в замовленні: ' . listItems() . $p;
    $message .= 'Загальна вартість замовлення: ' . $totalSum . ' грн.' . $p;
    $message .= 'Адреса доставки: ' . $address . $p;
    $message .= 'Дата і час замовлення: ' . $dateAndTime;

    if ($email !== '') {
        $sql = 'SELECT * FROM customers_emails WHERE email=\'' . $email . '\'';
        $result = $connection->query($sql);
        if ($result->num_rows === 0) {
            $sql = 'INSERT INTO customers_emails VALUES(\'' . $email . '\')';
            $connection->query($sql);
        }
    }

    mail($to, $subject, $message, $headers);
    echo $message;
}