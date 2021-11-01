<?php
    $host = "localhost";
    $dbUser = "root";
    $dbPass = "philip21";
    $dbName = "narciss";
    $connectDB = mysqli_connect($host,$dbUser,$dbPass,$dbName) or die("Ошибка" + mysqli_error($connectDB));
?>