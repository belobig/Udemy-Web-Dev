<?php
	session_start();
	
	if ($GET["logout"]==1 AND $_SESSION['id']) { session_destroy();
		$message="You have been logged out. Have a nice day!";
	}
	
	include("connection.php");
$value = @$_POST['submit'];

if(isset($_POST['submit']))//watch here when u trigger submit button it will find out

	if($_POST['submit']=="Sign Up") {

		if(!$_POST['e-mail']) $error.="<br />Please enter your email";// and here too u have to use e-mail because in ur html code type of input email name is e-mail
			else if (!filter_var($_POST['e-mail'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";

		if(!$_POST['password']) $error.="<br />Please enter your password";
			else {
	
				if(strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters";
				if(!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter";
			}
		if($error) $error = "There were error(s) in your signup details:".$error;
		else {
			$query = "SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['e-mail'])."'";
			$result = mysqli_query($link, $query);
			$results = mysqli_num_rows($result);
			if ($results) $error = "That email address is already registered";
			else {
				$query="INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['e-mail'])."', '".md5(md5($_POST['e-mail']).$_POST['password'])."')";
				mysqli_query($link, $query);
				echo "You've been signed up";
				
				$_SESSION['id']=mysqli_insert_id($link);
				header("Location:mainpage.php");
				// Redirect to logged in page
			}
		}
	}

	if ($_POST['submit']=="Log In") {
		$query="SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['logine-mail'])."' AND password='".md5(md5($_POST['logine-mail']).$_POST['loginpassword'])."' LIMIT 1";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		if ($row) {
			$_SESSION['id']=$row['id'];
			header("Location:mainpage.php");
			// Redirect to logged in page
		}else {
			$error = "We could not find a user with that email and password. Please try again.";
		}
	}
?>
