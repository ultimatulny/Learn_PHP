<?php 
	
	// Переменные
	$num = 25;
	$float = 0.125;
	$string = "Hello!";
	$bool = true;

	// Константы
	define("PI", 3.14);
	define("LOREM", "Lorem ipsum dolor sit amet...");
	
	// Вывод переменных
	echo "<b>Variables: </b><br>";
	echo "Num = $num";
	echo "<br>";
	echo "Float = $float";
	echo "<br>";
	echo "String = $string";
	echo "<br>";
	echo "Bool = $bool";
	echo "<br><br>";

	// Вывод констант
	echo "<b>Constants: </b><br>";
	echo PI;
	echo "<br>";
	echo LOREM;
	echo "<br><br>";

	// Проверка констант на существование
	echo "<b>Check constants: </b><br>";
	echo defined("PI"); // Если PI существует, то вывод числа 1, иначе пустая строка ""
	echo defined("KEK"); // Вывод пустой строки
	
 ?>
