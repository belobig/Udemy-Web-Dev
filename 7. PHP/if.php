<?php
	
	
	$number=1;
	$otherNumber=2;
	$thirdNumber=2;
	
	if ($number==1) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
	
	if ($number==$otherNumber) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
	
	if ($number!=$otherNumber) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
	
	if (!($number==$otherNumber)) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
	
	if ($thirdNumber==$otherNumber) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
	
	if ($thirdNumber==$otherNumber AND $number==$otherNumber) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
	
	if ($thirdNumber==$otherNumber OR $number==$otherNumber) {
		echo "True!";
		
	}else {
		echo "False!";
		
	}
?>