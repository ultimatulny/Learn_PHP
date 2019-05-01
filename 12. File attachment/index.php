<?php 
	
	/*****
	*
	*	File attachment
	*
	*****/

	$title = "File attachment";
	include "header.php";
	echo "Тело документа";
	include "footer.php";
	include "page.php";

	/*
		Существует несколько видов подключения файлов:
		1) require - Если проблема при подключении файла, то выдаст ошибку.
		2) include - В случае проблемы просто пропустит файл и выполнит код дальше. НО! Выдаст ошибку!
		3) include_once - Подключает файл к странице один раз!
		4) require_once
	*/

 ?>