<?php
	//if you already have a mysql sever fell free to change it
    $servername = "localhost"; // Or your MySQL host
	$username = "root";
	$password = "root";
	$dbname = "clickerUsers";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
	if (!$conn) {
		echo"an error has accured";
	}

// Perform database operations here...

// Close connection
?>