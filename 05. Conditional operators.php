<?php 
	
	/*****
	*
	*	Conditional operators
	*
	*****/

	$a = 10;
	$b = 5;

	if($a != $b){
		echo "A != B";
	} else if($a == $b){
		echo "A == B";
	} else{
		echo "Error";
	}

	$a == $b ? $c = "A == B" : $c = "A != B";
	echo "<br>".$c;



 ?>