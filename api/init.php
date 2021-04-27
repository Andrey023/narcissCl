<?php
	function getOS(){
		$userOS = $_SERVER['HTTP_USER_AGENT'];

		if (strpos($userOS, "linux")) {
			# code...
		}
	}