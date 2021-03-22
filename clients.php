<?php
    include_once('..\db.php');
    include_once('..\..\header.php');
    if($connectDB){
        echo 'Поключено!';
    }
?>  
    <a href="#" class="addNewClient">Добавить клиента!</a>
    <form action="api/clients/add-new.php" method = "POST" class="addFormClient">
        <input type="text" name="client-n">
        <input type="text" name="client-sn">
        <input type="tel" name="phone" placeholder="+7(  ) ___-__-__" pattern="+7 [0-9]{3} - [0-9]{3} - [0-9]{2} - [0-9]{2}">
        <input type="submit" value="Сохранить">
    </form>
    <div class="clents-narciss">

    </div>
    <script>
        $('a.addNewClient').click(
            function(){
                alert("ок");
            }
        )
    </script>
