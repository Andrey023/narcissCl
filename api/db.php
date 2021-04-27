<?php
    $host = "localhost";
    $dbUser = "root";
    $dbPass = "root";
    $dbName = "narciss";
    $connectDB = mysqli_connect($host,$dbUser,$dbPass,$dbName) or die("Ошибка" + mysqli_error($link));
?>