<?php 
	
	/*****
	*
	*	Работа с файлами
	*
	*****/

	/*

		fopen("filename", "r / r+ / w / w+ / a / a+") - открывает файл, для чтения или чтения + запись

		fwrite(file, "text..") - записывает в файл текст

		fclose(file) - закрывает файл

		fread(file, кол-во символов) - читает файл

		feof(file) - отслеживает то, на сколько мы прочитали файл.
		while(!feof($file)){
			echo fread($file, 1);
		}
		
		fseek(file, 0) - возвращает курсор в начало файла

		file_put_contents("filename", "text..") - Создает/записывает в файл содержимое, все в одну функцию
		
		file_get_contents("filename") - выводит весь файл

		file_exists("filename") - проверяет, существует ли файл

		filesize("filename") - возвращает размер файла в байтах

		rename("filename", "new_filename") - изменяет название файла

		unlink("filename") - удаляет файл
	*/
	
	//$file = fopen("a.txt", "a+t");

	//fwrite($file, "Example\nText\nLol");

	//fclose($file);

	$file = fopen("a.txt", "r+t");

	while(!feof($file)){
		echo fread($file, 1);
	}

	fclose($file);
	
	file_put_contents("hello.txt", "HELLO");


 ?>