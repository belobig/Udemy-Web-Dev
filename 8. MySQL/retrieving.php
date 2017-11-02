<?php

	$link = mysqli_connect("localhost", "cl55-costnerdb", "6ttkKC-WK", "cl55-costnerdb");
	
	if (mysqli_connect_error()) {
		die("Couldn't connect to database");
		
	}
	
	$query = "SELECT * FROM users";
	
	if ($result=mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result);
		
		print_r($row);
		
	}else {
		echo "It failed";
	}
	
?>