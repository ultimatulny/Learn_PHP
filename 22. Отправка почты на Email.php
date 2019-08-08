<?php 
	
	/*****
	*
	*	Отправка почты на email
	*
	*****/

	/*
		
	*/
	
	$message = "Hello my friend!";
	$to = "cod.alexandr@yandex.ru";
	$from = "alma@bk.ru";
	$subject = "Hey!";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
	mail($to, $subject, $message, $headers);


 ?>