<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Narcis</title>
</head>
<body>
    <?php
        echo (
            "<h1>hello all!</h1>"
        );
    ?>
    <form action="api/clients/add-new.php" method = "GET" class="addFormClient">
        <input type="text" name="client-n">
        <input type="text" name="client-sn">
        <input type="tel" name="phone" placeholder="+7(  ) ___-__-__" pattern="+7 [0-9]{3} - [0-9]{3} - [0-9]{2} - [0-9]{2}">
        <input type="submit" value="Сохранить">
    </form>
    <div class="clents-narciss">

    </div>
</body>
</html>