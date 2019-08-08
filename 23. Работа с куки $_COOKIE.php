<?php 
	
	/*****
	*
	*	Работа с куки $_COOKIE
	*
	*****/

	/*
		
	*/
	
	setcookie("Login", "alex777", time() + 10);

	echo $_COOKIE["Login"];
	
	if(isset($_COOKIE["Login"])){
		echo "Куки есть!";
	}else{
		echo "Куки нет!";
	}

 ?>