<?php
    include_once dirname(__FILE__, 2) . '/db.php';
    include_once dirname(__FILE__, 3). '/header.php';
?>
<a href="#cityAdd">
	Города клиентов
</a>
<form action="addCity.php" id="cityAdd" method="POST">
	<label for="">Наименование города:</label>
	<input type="text" name="cityName">
	<input type="submit">
</form>