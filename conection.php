	<?php 

	class conexion{

		public static function conectar(){
			define('servidor','localhost');
			define('bdd','loguin');
			define('usuario','root');
			define('clave','');
			$opciones = array('PDO::MYSQL_ATTR_INIT_COMMAND'=>'SET NAME utf8');
			try
			{
				$conexion = new PDO("mysql:host=".servidor.";dbname=".bdd,usuario,clave,$opciones);
				return $conexion;

			}catch(Exception $e){
				die("Error");

			}
		}
	}
 ?>