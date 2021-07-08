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
?>
<div class="trackedList">
	<div>
		<?php 
			foreach($selectedClient as $clients){
                $selectedClientList = 'SELECT clients.name, clients.mark, city.cityID FROM clients INNER JOIN city ON clients.cityClient = city.cityID WHERE clients.personID = '.$clients.'';
                // $selectedClientList = 'SELECT name, mark FROM clients WHERE personID = '.$clients.'';
                $getListCl = mysqli_query($connectDB, $selectedClientList);
                $arrClients = mysqli_fetch_assoc($getListCl);
                echo $arrClients['name'].'<br />';
                echo $arrClients['mark'].'<br />';
                var_dump($arrClients);
            }
		?>
	</div>
</div>