<?php
	$conn = new mysqli('localhost', 'votesystem', 'root1234', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>