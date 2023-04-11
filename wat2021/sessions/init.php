<?php
	$hostname = "localhost";
	$username = 'root';
	$password = "";
	$database = "wat2021db";

	$connection = mysqli_connect($hostname, $username, $password, $database);
	if (!$connection) {
		die("Connectin failed: " . mysql_connect_error());
	}
	// echo "Connected successfully";
    session_start();
?>