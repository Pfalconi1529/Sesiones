<?php 

	session_start();

	if(isset($_REQUEST['iniciar'])){
		$usuario = $_POST['usuario'];
		
		$_SESSION['usuario']=$usuario;

		if (isset($_COOKIE[$usuario])) {
			$contador = $_COOKIE[$usuario];
			setcookie($usuario, $contador +1, time() + 3600 );
		}else {
			setcookie($usuario, 1, time() + 3600);
		}
		header('Location:contenido.php');
	}


 ?>