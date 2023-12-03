<?php

$name = $_POST['fname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mes = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$mes = htmlspecialchars($mes);

$name = urldecode($name);
$email = urldecode($email);
$tel = urldecode($tel);
$mes = urldecode($mes);

$name = trim($name);
$email = trim($email);
$tel = trim($tel);
$mes = trim($mes);

if (mail("sourwilll33@gmail.com",
         "Новое сообщение с сайта...",
         "Имя: ".$name."\n".
         "e-mail: ".$email."\n".
         "Телефон: ".$tel."\n".
         "Сообщение: ".$mes."\r\n")
    ) {
        echo ('Письмо успешно отправлено!');
}

else {
    echo ('Появилась ошибка, проверьте вашы данные!');
}

?>