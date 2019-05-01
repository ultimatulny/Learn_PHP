<?php 
	if(isset($_POST["done"])) // Проверка, была ли нажата кнопка done, чтобы скрипт не выполнился при старте
	{
		// Тут мог быть код check.php
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Forms</title>
</head>
<body>
	<form action="check.php" name="main" method="post">
		<label>Имя: </label><br>
		<input type="text" name="name" placeholder="Имя"><br><br>
		<label>Фамилия: </label><br>
		<input type="text" name="lastname" placeholder="Фамилия"><br><br>
		<label>Email: </label><br>
		<input type="email" name="email" placeholder="Email"><br><br>
		<label>Комментарий: </label><br>
		<textarea name="message" id="mess" cols="40" rows="5"></textarea><br>
		<input type="submit" name="done" value="Готово">
	</form> 
</body>
</html>