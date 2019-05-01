<?php 
	
	/*****
	*
	*	Functions
	*
	*****/

	function show_nums($a,$b){ // Вывод чисел от A до B
		if($a > $b) return 0;
		for ($i = $a; $i <= $b; $i++) { 
			echo "$i<br>";
		}
	}

	show_nums(22,33);

 ?>