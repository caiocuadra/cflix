<?php
	
	include('config.php');
	include('verifica.php');
	include('mysql.php');
	

	$login = new Login();
	
	if(login::logado() == false){
		include('login.php');
		
	}else{
		if($_SESSION['user'] == "admin"){
		include('main.php');
	}else{
		include('site/index.php');
	}
	}

?>