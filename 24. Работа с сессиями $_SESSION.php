<?php 
	
	/*****
	*
	*	Работа с сессиями $_SESSION
	*
	*****/

	/*
		session_start() - Старт сессии
		session_destroy() - Удаляет сессию

	*/
	
	session_start();
	$_SESSION["Login"] = "Alex666";

	echo $_SESSION["Login"];

	
 ?>