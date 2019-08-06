<?php 
	
	/*****
	*
	*	Строковые функции
	*
	*****/

	/*

		strlen() - Длина строки

		strpos(string, "text", (индекс поиска по желанию)) - находит, где начинается text. Если не найден, вернет 0(false)

		substr(string, (с какого id обрезать), (до какого, по желанию)) - обрезание строки

		str_replace("a", "b", string) - заменяет a на b в string

		htmlspecialchars() - трансформирует теги в обычный текст

		strtolower() - переводит к нижнему регистру

		strtoupper() - переводит к верхнему

		md5() - хеш строки

		trim() - удаляет пробелы перед строкой и после

	*/

	$string = "Hello my friend!";

	echo strlen($string)."<br>";
	echo strpos($string, "llo")."<br>";

	if(strpos($string, "T") == false) echo "T не найдено";
		else echo "T найдено";

	echo "<br>".substr($string, 4, 6)."<br>";

	echo str_replace("lo", "123", $string)."<br>";	

	$str = "<b>LOL</b>";
	echo htmlspecialchars($str)."<br>";

	echo strtolower($str)."<br>";

	echo md5($str)."<br>";

 ?>