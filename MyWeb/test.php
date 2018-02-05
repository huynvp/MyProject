<?php
	session_start();
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	echo $a = json_encode($_SESSION);

	echo "<pre>";
	print_r(json_decode($a));
	echo "</pre>";
?>