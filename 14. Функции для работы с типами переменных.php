<?php 
	
	/*****
	*
	*	Функции для работы с типами переменных
	*
	*****/

	/*
		
		isset() - Проверяет, существует ли переменная

		unset() - Удаляет переменную

		is_numeric() - Проверяет, является ли переменная числом (если в строке число, то тоже true)

		is_integer() - Проверяет, является ли переменная числом

		is_double() - Проверяет, является ли число вещественным

		is_string() - Проверяет, является ли переменная строкой

		is_bool() - Проверяет, является ли переменная типа bool

		is_scalar() - Проверяет, является ли переменная простой? (Не объект, не массив!)

		is_null() - Проверяет, является ли переменная null

		is_array() - Проверяет, является ли переменная массивом

		gettype() - Возвращает тип переменной
		
	*/

	function check_x(){ // Проверка на существование x

		if(isset($GLOBALS['x'])){
			echo "YES!";
		} else{
			echo "NO!";
		}

	}

	$x = 15;		// Выведет YES, т.к. существует x
	check_x();

	echo "<hr>";

	unset($x);		// Выведет NO, т.к. мы удалили
	check_x();

	$a = "123";

	echo "<hr>";

	echo "Is Numeric - ".is_numeric($a)."<br>";
	echo "Is Integer - ".is_integer($a)."<br>";
	echo "Is Double - ".is_double($a)."<br>";
	echo "Is String - ".is_string($a)."<br>";
	echo "Is Boolean - ".is_bool($a)."<br>";
	echo "Is Scalar - ".is_scalar($a)."<br>";
	echo "Is Null - ".is_null($a)."<br>";
	echo "Is Array - ".is_array($a)."<br>";
	echo "Type - ".gettype($a)."<br>";

 ?>