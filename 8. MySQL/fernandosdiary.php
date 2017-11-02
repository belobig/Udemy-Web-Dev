<?php

$value = @$_POST['submit'];

if(isset($_POST['submit']))//watch here when u trigger submit button it will find out

	if($_POST['submit']=="Sign Up") {

		if(!$_POST['e-mail']) $error.="<br />Please enter your email";// and here too u have to use e-mail because in ur html code type of input emil name is e-mail
			else if (!filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email adress";

		if(!$_POST['password']) $error.="<br />Please enter your password";
			else {
	
				if(strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters";
				if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter";
			}
		if($error) echo "There were error(s) in your signup details:".$error;
		else {
			$link = mysqli_connect("localhost", "cl55-costnerdb", "6ttkKC-WK", "cl55-costnerdb");
			$query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['e-mail'])."'";
			$result = mysqli_query($link, $query);
			$results = mysqli_num_rows($result);
			if ($results) echo $error = "That email address is already registered";
			else {
				$query="INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['e-mail'])."', '".md5(md5($_POST['e-mail']).$_POST['password'])."')";
				mysqli_query($link, $query);
				echo " You been signed up";
			}
		}
	}

?>

<form method="post">

	<input type="email" name="e-mail" id="email"/>
	<input type="password" name="password"/>
	<input type="submit" name="submit" value="Sign Up"/>
</form>