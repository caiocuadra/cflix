
<?php
	include_once('verifica.php');
	$verificar = new Login();
	
	if(login::logado() == false){
		echo "Faça o <a href='index.php'>login</a> para acessar o site";
	}else{
		if($_SESSION['user'] == "admin"){
		?>

		<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/98dda1f054.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet"/>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<link href="<?php echo INCLUDE_PATH;?>css/style.css" rel="stylesheet"/>
	<title>FAÇA O LOGIN</title>
	</head>
	<body>
		<header>
			
		</header>
	</body>
	</html>
<?php

	}
	}

?>
