<?php 

	//connection to database
	$conn = mysqli_connect("localhost", "root", "" , "yousell");
 	
	//checks the connection
	if($conn->connect_error)
	{
		die("Connection Failed:".$conn->connect_error);
	
	}


?>