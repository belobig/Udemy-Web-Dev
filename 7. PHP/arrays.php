<?php

	$myArray=array("pizza", "chocolate", "coxhinhas");
	
	
	print_r($myArray);
	
	echo $myArray[2];
	
	echo "<br /><br />";
	
	$anotherArray[0]="crispies";
	$anotherArray[1]="slimies";
	
	print_r($anotherArray);
	
	echo "<br /><br />";
	
	$thirdArray=array(
		"Brazil" => "Brazilian Portuguese",
		"USA" => "English",
		"Italy" => "Italian"
	
	);
	
	print_r($thirdArray);
	
	$anotherArray[]="sausage";
	
	echo "<br /><br />";
	
	print_r($anotherArray);
	
	echo "<br /><br />";
	
	unset($thirdArray["Italy"]);
	
	print_r($thirdArray);
	
	echo "<br /><br />";
	
	$polp="Polp!";
	
	unset($polp);
	
	echo $polp;
	
?>