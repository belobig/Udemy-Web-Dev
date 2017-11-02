<?php

	$link = mysqli_connect("localhost", "cl55-costnerdb", "6ttkKC-WK", "cl55-costnerdb");
	
	if (mysqli_connect_error()) {
		die("Couldn't connect to database");
		
	}
	
	// $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Cloppity', 'cloppity@clipclop.com', 'cloppityrules')";
	
	$query = "UPDATE `users` SET `email`='cloppity2@clipclop.com' WHERE `id`=2 LIMIT 1";
	$query = "UPDATE `users` SET `email`='sloppy@joe.com' WHERE `id`=3 LIMIT 1";
	$query = "UPDATE `users` SET `name`='BillyBob' WHERE `name`='Bob'";
	$query = "UPDATE `users` SET name='Ian O\'Neil' WHERE id=3 LIMIT 1"; 
	
	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users WHERE name='Cloppity'";
	$query = "SELECT * FROM users WHERE email LIKE '%h%'";
	$query = "SELECT * FROM users WHERE name LIKE 'b%'";
	$query = "SELECT * FROM users WHERE id>3";
	$query = "SELECT * FROM users WHERE id<4 AND password!=''";
	$query = "SELECT `name` FROM users";
	$query = "SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($link, $name)."'";
	
	if ($result=mysqli_query($link, $query)) {
		
		echo mysqli_num_rows($result);
		
		while ($row = mysqli_fetch_array($result)) {
		
			print_r($row);
		}
	}else {
		echo "It failed";
	}
	
?>