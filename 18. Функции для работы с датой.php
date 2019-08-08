<?php 
	
	/*****
	*
	*	Функции для работы с датой
	*
	*****/

	/*

		time() - кол-во секунд с 01.01.1970

		microtime(true) - кол-во секунд с 01.01.1970 + микротайм

		date("Y-m-d H:i:s") - текущая дата + время

		mktime(hours, min, sec, month, day, year) - Возвращает кол-во секунд с 1970

		getdate(кол-во секунд с 1970) - возвращает в виде массива дату

		checkdate(month, day, year) - проверяет, существует ли такой день

	*/
	


	$time = mktime(12, 53, 23, 7, 4, 2003);

	$arr = getdate($time);

	print_r($arr);

 ?>