<!doctype html>
<html>
<head>
    <title>PHP Email</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body>
<div>

	<?php
	
		$emailTo="belobig@hotmail.com";
		$subject="Here comes a big load of email!";
		$body="Sir Testsalot";
		$headers="From: emmadogg@hotmail.com";
		
		if (mail($emailTo, $subject, $body, $headers)) {
			echo "Mail sent successfully!";
		}else{
			echo "Mail not sent!";
		}
		
	
	?>


</div>
</body>
</html>