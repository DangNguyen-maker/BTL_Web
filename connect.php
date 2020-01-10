<?php
	$data = 'mysql:host=localhost;dbname=btl_web';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	);
	try {
		$db = new PDO($data, 'root', '', $options);
	}
	catch (PDOException $e) {
		echo $e->getMessage();
		exit();
	}
?>