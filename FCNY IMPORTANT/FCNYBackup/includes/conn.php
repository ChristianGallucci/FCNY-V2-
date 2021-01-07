<?php


	$conn = new mysqli('mysql.fcnysoccer.com', 'fcny1', 'Fcnyhunt1', 'fcnydb');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>