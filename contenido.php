<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Contenido</title>
 </head>
 <body>
 	<h1>Hola <b><?php echo $_SESSION['usuario'];?></b></h1>
 </body>
 </html>