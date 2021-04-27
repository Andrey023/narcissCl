<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        define('pathStyle', $_SERVER['DOCUMENT_ROOT']);
    ?>
    <link rel="stylesheet" href= "/styles.css">
    <title>Narcis</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="top-menu">
        <a href="<?php __DIR__ ?>/clients.php" class="item-menu">Клиенты</a>
        <a href="<?php __DIR__ ?>/tracked.php" class="item-menu">Путевой</a>
        <a href="<?php __DIR__ ?>/loaded-list.php" class="item-menu">Загрузочный</a>
        <a href="<?php __DIR__ ?>/count.php" class="item-menu">Расчёт</a>
        <a href="<?php __DIR__ ?>/api/clients/settings.php" class="item-menu"><img src="/images/settings.png" alt=""></a>
    </div>