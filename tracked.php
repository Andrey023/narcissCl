<?php
    include_once(__DIR__ . '/api/db.php');
    include_once(__DIR__ . '/header.php');
    
	
    

 //    var_dump($idClients);
    // function getSelectedClients($idClients){
    // 	global $connectDB, $selectedClientList;

    // }
    $selectedClient = $_POST['activeClient'];
    // foreach($selectedClient as $client){
    // 	getSelectedClients($client);
    // }
    $h3List =['Имя Клиента', 'Маркировка', 'Город доставки'];
?>
<div class="trackedList">
	<div>
        <h3>Имя Клиента</h3>
        <?php
    	foreach($selectedClient as $clients){
            $selectedClientList = 'SELECT clients.name, clients.mark, city.cityName FROM clients INNER JOIN city ON clients.cityClient = city.cityID WHERE clients.personID = '.$clients.'';
            $getListCl = mysqli_query($connectDB, $selectedClientList);
            $arrClients = mysqli_fetch_row($getListCl); 
                    echo '<span>'.$arrClients[0].'</span>';
            }
            ?>
	</div>
    <div>
        <h3>Маркировка</h3>
        <?php
        foreach($selectedClient as $clients){
            $selectedClientList = 'SELECT clients.name, clients.mark, city.cityName FROM clients INNER JOIN city ON clients.cityClient = city.cityID WHERE clients.personID = '.$clients.'';
            $getListCl = mysqli_query($connectDB, $selectedClientList);
            $arrClients = mysqli_fetch_row($getListCl); 
                    echo '<span>'.$arrClients[1].'</span>';
            }
            ?>
    </div>
    <div>
        <h3>Город доставки</h3>
        <?php
        foreach($selectedClient as $clients){
            $selectedClientList = 'SELECT clients.name, clients.mark, city.cityName FROM clients INNER JOIN city ON clients.cityClient = city.cityID WHERE clients.personID = '.$clients.'';
            $getListCl = mysqli_query($connectDB, $selectedClientList);
            $arrClients = mysqli_fetch_row($getListCl); 
                    echo '<span>'.$arrClients[2].'</span>';
            }
            ?>
    </div>
</div>  