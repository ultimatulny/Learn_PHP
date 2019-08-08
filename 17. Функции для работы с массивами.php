<?php 
	
	/*****
	*
	*	Функции для работы с массивами
	*
	*****/

	/*

		count(array) - кол-во элементов в массиве

		sort(array) - сортировка по возрастанию

		rsort(array) - сортировка по убыванию

		asort(array) - Запонимаются ключи/индексы. Для ассоциативных.

		arsort(array) - По убыванию, запоминает ключи.

		ksort(array) - Сортирует ключи по возрастанию

		krsort(array) - Сортирует ключи по убыванию

		shuffle(array) - Перемешивает значения в массиве

		in_array(value, array) - Првоеряет, есть ли value в array

		array_merge(array1, array2) - Объединение массивов в один

		array_slice(array, offset) - удаляет элементы в начале и по желанию в конце.

	*/

	$array = array(50, 25, 30, 2, 50);
	$assoc = array("One" => 25, "Two" => 5, "Magic" => 20, "Ye" => 1);

	$arrDone = array(1, 2, 3, 4, 5, 6);
	$arrDone = array_slice($arrDone, 1, 4);

	print_r($arrDone);

 ?>