<?php


	$conn = new mysqli('localhost', 'root', '', 'fcny');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>