<?php
	//if you already have a mysql sever fell free to change it
    $servername = "localhost"; // Or your MySQL host
	$username = "clciker";
	$password = "test1234";
	$dbname = "Users";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
	if (!$conn) {
		echo"an error has accured";
	}

// Perform database operations here...

// Close connection
	mysqli_close($conn);
?>