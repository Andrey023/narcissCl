<?php 
	session_start();
	require_once(__DIR__.'/db.php');
	function getClients($DB, $id){
		$queryGetClient = "SELECT * FROM clients WHERE personID IN (".implode(',',$id).")";
		$gettedClient = mysqli_query($DB, $queryGetClient);
		$gettedClientAssoc = mysqli_fetch_all($gettedClient, MYSQLI_ASSOC);
		return $gettedClientAssoc;
	}
?>