<?php 
	
	/*****
	*
	*	Two-dimensional arrays
	*
	*****/

	$arr = array(array(12, 41, 533), // Создание двумерного массива
				 array(52, "Hello"),
				 array("Wow"));

	// echo $arr[2][0]; // Обращение к элементу массива

	for($i = 0; $i < count($arr); $i++) // Вывод элементов массива
	{ 
		for($j = 0; $j < count($arr[$i]); $j++)
		{
			echo $arr[$i][$j]." ";
		}

		echo "<br>";

	}


 ?>