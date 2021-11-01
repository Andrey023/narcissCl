<?php 
	include_once dirname(__FILE__, 2) . '/db.php';
    include_once dirname(__FILE__, 3). '/header.php';
    $cityClient = $_POST['cityName'];
    $regionClient = $_POST['nameRegion'];
    $querry = "INSERT INTO city (cityName) VALUES (\"$cityClient\")";
    $querryReg = "INSERT INTO regions (nameRegion) VALUES (\"$regionClient\")";
    $addCity = mysqli_query($connectDB, $querry);
    $addReg = mysqli_query($connectDB, $querryReg);
    if($addCity){
    	echo "Добавлено";
    }

?>