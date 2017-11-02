<?php

	setcookie("id","1234",time()+60*60*24); //cookie set with expiry in seconds, so this one will last for 24 hours
	setcookie("id", "", time()-3600); //cookie set with expiry 1 hour in the past, effectively deleting the cookie
	
	echo $_COOKIE['id'];
	
?>