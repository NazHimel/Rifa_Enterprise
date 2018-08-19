<?php
	$db = new mysqli('localhost', 'root', '', 'rifa-db');

	if($db->connect_error){
		$error = $db->connect_error;
	}
?>
