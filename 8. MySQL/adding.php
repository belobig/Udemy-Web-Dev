<?php

	$link = mysqli_connect("localhost", "cl55-costnerdb", "6ttkKC-WK", "cl55-costnerdb");
	
	if (mysqli_connect_error()) {
		die("Couldn't connect to database");
		
	}
	
	$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Cloppity', 'cloppity@clipclop.com', 'cloppityrules')";
	
	$query = "UPDATE `users` SET `email`='cloppity2@clipclop.com' WHERE `id`=2 LIMIT 1";
	$query = "UPDATE `users` SET `email`='sloppy@joe.com' WHERE `id`=3 LIMIT 1";
	$query = "UPDATE `users` SET `name`='BillyBob' WHERE `name`='Bob'";
	
	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users";
	
	if ($result=mysqli_query($link, $query)) {
		$row = mysqli_fetch_array($result);
		
		print_r($row);
		
	}else {
		echo "It failed";
	}
	
?>