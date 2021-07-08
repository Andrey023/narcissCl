<?php
    include_once dirname(__FILE__, 2) . '/db.php';
    include_once dirname(__FILE__, 3). '/header.php';
    $name = $_POST['client-n'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $cityName = $_POST['cityName'];
    $_mark = $_POST['markCl'];
    $_tarifR = $_POST['tarifR'];
    $_tarifC = $_POST['tarifChriz'];
    $_tarifT = $_POST['tarifCC'];
    $insertNewClient = "INSERT INTO clients(`name`, `mark`, `phone`, `mail`, `tarifR`, `tarifChriz`, `tarifT`, `cityClient`) VALUES (\"$name\",\"$_mark\",\"$phone\",\"$mail\",\"$_tarifR\",\"$_tarifC\",\"$_tarifT\", \"$cityName\")";
    $result = mysqli_query($connectDB, $insertNewClient) or die("Ошибка" + mysqli_error($connectDB));
    var_dump($result);
    if($result){
        echo "Добавлено!";
    }
    else{
        echo "Запись не успешна!";
    }
?>