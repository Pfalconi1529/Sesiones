<?php 

	session_start();

	if(isset($_REQUEST['iniciar'])){
		$correo = $_POST['email'];
		$_SESSION['usuario']=$correo;

		if (isset($_COOKIE[$correo])) {
			$contador = $_COOKIE[$correo];
			setcookie($correo, $contador +1, time() + 3600 );
		}else {
			setcookie($nombre, 1, time() + 3600);
		}
		header('Location:contenido.php');
	}


 ?>