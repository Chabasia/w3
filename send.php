<?php
    // Заголовки
    header('Content-Type: text/html; charset=UTF-8');

    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "u17334"; // Логин БД
    $db_password = "4897115"; // Пароль БД
    $db_base = "u17334"; // Имя БД
    $db_table = "application"; // Имя Таблицы БД

    // Переменные с формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $limb = $_POST['limb'];
    $bio = $_POST['bio'];
    $check = $_POST['check'];
    $super = array();
    foreach ($_POST['super'] as $key => $value) {
        $super[$key] = $value;
    }
    $super_str = implode(', ', $super);


    // Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error) {
        die('Ошибка подключения к базе данных : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }

    // Если пользователь не ввел имя, сообщаем ему об этом и убиваем подключение
    if ($name == "") {
        die("Ошибка! Введите своё имя.");
    }

    // Если пользователь не ввел почту, сообщаем ему об этом и убиваем подключение
    if ($email == "") {
        die("Ошибка! Введите свой email.");
    }

    // Если пользователь не ввел биографию, сообщаем ему об этом и убиваем подключение
    if ($bio == "") {
        die("Ошибка! Напишите что-нибудь о себе.");
    }

    // Если пользователь не поставил галочку, сообщаем ему об этом и убиваем подключение
    if ($check != "on") {
        die("Вы не можете отправить форму, если не согласны с контрактом.");
    }

    // Создаем запрос в базу данных и записываем его в переменную
    $result = $mysqli->query("INSERT INTO ".$db_table." (name, email, age, sex, limb, super, bio) VALUES ('$name','$email',$age,'$sex',$limb,'$super_str','$bio')");

    // Проверка
    if ($result == true) {
        echo "<script>alert('Успешно отправлено!')</script>";
        header('Refresh: 1; url=/w3/');
    } else {
        echo "Ошибка! Информация не занесена в базу данных";
    }
?>
