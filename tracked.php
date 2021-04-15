<?php
    include_once(__DIR__ . '\api\db.php');
    include_once(__DIR__ . '\header.php');
    if($connectDB){
        echo 'Поключено!';
    }
?>