<?php 
	
	/*****
	*
	*	Arrays
	*
	*****/

	$arr = array(15, 505, "Hello", 21); // Создание массива
	echo $arr[2]."<br>"; // Вывод Hello
	$arr[0] = 10; // Замена нулевого элемента
	$arr[] = "Kek"; // Добавление нового элемента в массив (В конец)

	// count(); - кол-во элементов массива

	for($i = 0; $i < count($arr); $i++) // Вывод элементов массива
	{ 
		echo $arr[$i]."<br>";
	}

	/*****
	*
	*	Associative arrays
	*
	*****/

	$list = array("age" 	=> 	18,			// Создание массива
				  "name" 	=> 	"Alex",
				  "student" => 	true);

	$list["age"] = 20; // Изменение age
	$sum = 0;

	echo getAverage(array("first" => 45, "second" => 30, "third" => 12)); // Вызов функции getAverage

	function getAverage($mass){ // Среднее значение всех элементов в массиве
		foreach($mass as $key => $value){
			$sum += $value;
		}
		return $sum / count($mass);
	}

 ?>