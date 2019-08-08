<?php 
	session_start();
	if($_GET["send"] == 1){
		echo "Успешно отправлено на ".$_SESSION["to"];
	}
?>