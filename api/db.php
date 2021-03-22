<?php
    $host = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "Test";
    $connectDB = mysqli_connect($host,$dbUser,$dbPass,$dbName) or die("Ошибка" + mysqli_error($link));
?>