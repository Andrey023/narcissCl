<?php
    include_once(__DIR__ .'/api/func.php');
    include_once(__DIR__ .'/header.php');

    $selectedClient = $_POST['activeClient'];
    $h3List =['Имя Клиента', 'Маркировка', 'Город доставки'];
    $formated = implode(',', $selectedClient);
    echo $formated;
?>
    <div class="trackedList">
        <div>
            <h3>Имя Клиента</h3>
                <?php
                    $gettedClientAssoc = getClients($connectDB, $selectedClient);
                   foreach ($gettedClientAssoc as $client){
                        echo $client['name']."<br />";
                   }
                ?>
        </div>
    </div>