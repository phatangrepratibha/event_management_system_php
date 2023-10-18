<?php

	$conn = mysqli_connect("localhost", "root","", "main-cpp-php");

	if (!$conn) 
	{
		echo("Connection failed: " . mysqli_connect_error());
	}
?>