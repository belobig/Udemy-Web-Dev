<?php
	
	$array=array("mouse", "platypus", "lizard", "wombat");
	
	/*
	for ($i=1; $i<=10; $i++) {
		
		echo $i."<br />";
		
	}
	
	for ($i=1; $i<=10; $i=$i+2) {
		
		echo $i."<br />";
		
	}
	
	for ($i=1; $i<=100; $i=$i+5) {
		
		echo $i."<br />";
		
	}
	
	for ($i=500; $i>=100; $i=$i+5) {
		
		echo $i."<br />";
		
	}
	*/
	foreach ($array as $key => $value) {
		
		echo "Key: $key Value: $value <br />";
		
	}


?>