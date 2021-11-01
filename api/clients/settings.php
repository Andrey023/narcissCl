<?php
    include_once dirname(__FILE__, 2) . '/db.php';
    include_once dirname(__FILE__, 3). '/header.php';
?>
<form action="addCity.php" class="settingsForm" id="cityAdd" method="POST">
	<div>
		<label for="">Наименование города:</label>
		<input type="text" name="cityName">
	</div>
	<div>
		<label for=""> Наименование региона:</label>
		<input type="text" name="nameRegion">	
	</div>
	<input type="submit" value="Добавить">
</form>