<?php

	session_start();
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'classes/PHPMailer/src/Exception.php';
	require 'classes/PHPMailer/src/PHPMailer.php';
	require 'classes/PHPMailer/src/SMTP.php';
	
	define('INCLUDE_PATH', 'http://localhost/PROJETO_MAXFILMES/');	
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'maxfilmes');
?>