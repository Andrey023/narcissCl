<?php
    include("../db.php");
    $link = mysqli_connect($host,$dbUser,$dbPass,$dbName) or die("Ошибка" + mysqli_error($link));
    if($link){
        echo "Connect!";
    }
    $name = $_GET['client-n'];
    $insertNewClient = "INSERT INTO Clients (ClientID, FirstName) VALUES (1,\"$name\")";
    echo gettype($name);
    $result = mysqli_query($link, $insertNewClient) or die("Ошибка" + mysqli_error($link));
    if($result){
        echo "Добавлено!";
    }
?>