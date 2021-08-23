<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Sesiones con PHP</title>
</head> 
<body>
	<div class="container p-4 img-fluid bg-dark text-info " >
		<div class="row ">
			<div class="col text-center" >
				<img src="imagenes/fondo1.jpg" width="600" class="rounded float-start" height="600">
				
			</div>
			<div class="col">
				<div class="text-end">
					
				</div>
				<div>
					<h2 class="fw-bold text-center py-5">Bienvenido</h2>


					<form action="">
						<div class="mb-4">
							<label for="email" class="form-label">Correo Electrónico</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="mb-4">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="mb-4 form-check">
							<input type="checkbox" name="connected" class="form-check-input">
							<label for="connected" class="form-check-label" >Mantenerme conectado</label>
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
						</div>
						<div class="my-3">
							<span>No tienes Cuenta? <a href="#">Registrate</a></span><br>
							<span>Recupera tu cuenta? <a href="#">Recuperar Password</a></span>
						</div>

					</form>
					<div class="container w-100 my-5">
						<div class="row text-center">
							<div class="col-12">Iniciar Sesión</div>
						</div>
						<div class="row">
							<div class="col">
								<button class="btn btn-outline-primary w-100 my-1">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/faceboock.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Faceboock
									</div>
								</div>
								</button>
							</div>
							<div class="col">
								
								<button class="btn btn-outline-danger w-100 my-1">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/gmail.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Google
									</div>
								</div>
								</button>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>

	</div>

	

</body>
</html>