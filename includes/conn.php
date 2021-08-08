<?php
	$conn = new mysqli('localhost', 'votesystem', '', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>