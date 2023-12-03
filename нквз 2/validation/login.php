<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."rA120aR700");

    require "db.php";
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if (count($user) == 0) {
        echo "Ошибка: Пользователь не существует или неправельный парол.";
        exit();
    }
    setcookie('user', $user['login'], time() + 3600, "/");
    $mysql -> close();

    header('Location: /');
?>