<?php 
	include_once dirname(__FILE__, 2) . '/db.php';
    include_once dirname(__FILE__, 3). '/header.php';
    $cityClient = $_POST['cityName'];
    $querry = "INSERT INTO city (`name`) VALUES (\"$cityClient\")";
    $addCity = mysqli_query($connectDB, $querry);
    // var_dump($querry);
    if($addCity){
    	echo "Город $cityClient добавлен!";
    }

?>