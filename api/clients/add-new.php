<?php
    include_once dirname(__FILE__, 2) . '/db.php';
    include_once dirname(__FILE__, 3). '/header.php';
    $name = $_POST['client-n'];
    $phone = $_POST['phone'];
    $mail = $POST['mail'];
    $insertNewClient = "INSERT INTO clients(`name`, `phone`, `mail`) VALUES (\"$name\",\"$phone\",\"$phone\")";
    $result = mysqli_query($connectDB, $insertNewClient) or die("Ошибка" + mysqli_error($connectDB));
    if($connectDB){
        echo "Добавлено!";
    }
    else{
        echo "Запись не успешна!";
    }
?>