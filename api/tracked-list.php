<?php 
	include_once dirname(__FILE__) . '/db.php';
    include_once dirname(__FILE__, 2). '/header.php';

    $selectedClient = $_POST['activeClient'];
?>
<div class="trackedList">
	<div>
		<?php 
			echo "$selectedClient[0]";
			echo date('l / H');
		?>
	</div>
	<div>
		<?php
			echo date('l / H');
		?>
	</div>
	<div></div>
	<div></div>
	<div></div>
</div>