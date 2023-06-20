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
	<div class="box-login">
		<?php
			if(isset($_POST['acao'])){
				$user = $_POST['user'];
				$password = $_POST['pass'];
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					//logamos com sucesso
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['logado'] = true;
					header('Location: '.INCLUDE_PATH);
					die();
				}else{

					//falhou
					echo '<div class="box-erro"><i class="fa-regular fa-circle-xmark"></i> Usuário ou senha incorretos <i class="fa-regular fa-circle-xmark"></i></div>';
					?>

					<script>
						$(function(){
							$('.box-erro').fadeIn();

							setTimeout(function(){
							$('.box-erro').fadeOut();
							}, 3000);
						})
					</script>

					<?php
					
				}
			}
				
		?>
		<p>Efetue o Login:</p>
		<form method="post">
			<input type="text" name="user" placeholder="Usuário" required/>
			<input type="password" name="pass" placeholder="Senha" required/>
			<input type="submit" name="acao" value="Logar" required/>
		</form>
	</div>
</body>
</html>