<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $passrepeat = filter_var(trim($_POST['passrepeat']),
    FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 7 || mb_strlen($login) > 25) {
        echo "Ошибка: Длина логина должна быть от 7 до 25 символов.";
        exit();
    } 
    else if (mb_strlen($pass) < 7 || mb_strlen($pass) > 12) {
        echo "Ошибка: Длина пароля должна быть от 7 до 12 символов.";
        exit();
    }
    else if (mb_strlen($email) < 7 || mb_strlen($email) > 50) {
            echo "Ошибка: Длина e-mail должна быть от 7 до 50 символов.";
            exit();
    }

    if ($pass != $passrepeat) {
        echo "Ошибка: Пароли не совпадают.";
    }
    else {
        $pass = md5($pass."rA120aR700");

        require "db.php";
        $mysql -> query("INSERT INTO `users` (`login`, `pass`, `email`) VALUES('$login', '$pass', '$email')");
        $mysql -> close();

        header('Location: /#login-container');
    }
?>