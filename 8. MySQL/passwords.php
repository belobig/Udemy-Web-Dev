<?php
	/* 4 Levels of password security
		1. Store password as text in your database (not recommended, in fact, discouraged)- very easy to hack
		2. md5 hash*/
	echo md5("password"); //however, common passwords' md5 encoding is stored on rainbow tables, ie: crackstation.net
	//but if users' passwords are long and secure(obscure) enough, hashing them should be enough
	//  3. Salt - random string of numbers/letters set as salt variable are encrypted with the value of the password via hash, thus making it more difficult to crack
	$salt="aslolkjn8askijwqklbvxkl5akwsehoiasdf321384908";
	echo md5(salt."password");
	//  4. Variable salt, with multi-level hash - RECOMMENDED
	echo md5(md5($row['id'])."password");
	
	
?>