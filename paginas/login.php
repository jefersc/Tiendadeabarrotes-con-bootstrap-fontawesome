<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso de sistema</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
</head><br>
<body>
	<div class="container" style="background-color: orange; padding-top: 10px;">
		<header style="text-align: center;">
			<img src="../img/logo01.png"  width="300px" height="189px">
			<hr>
		</header>

		<section>
			<div class="container" style="width: 50%; border: 1px solid #d3d3d3; border-radius: 10px; padding: 10px;">
				<center><h3><i class="fa-solid fa-circle-user"></i> Iniciar Sesión</h3></center><br>
			<form name="frmacceso" id="frmacceso" method="post" action="proceso.php>">
			  <div class="mb-3">
			    <label for="txtuser" class="form-label">Usuario</label>
			    <input type="text" class="form-control" name="txtuser" id="txtuser">
			  </div>
			  <div class="mb-3">
			    <label for="txtpsw" class="form-label">Contraseña</label>
			    <input type="password" class="form-control" name="txtpsw" id="txtpsw">
			  </div>

			  <center><button type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary" style="background-color: #292a2c;border: 3px solid #85f0dd;">Enviar</button>
			  <button type="button" class="btn btn-primary" style="background-color: #292a2c;border: 3px solid #f71e0f;" onclick="history.back()">Volver</button></center>
			</form>
			</div>
		</section>
		<br>
		<footer>
			<div class="container" style="background-color: orange; height: 50px; padding-top: 10px;">
				<div class="row">
					<div class="col-sm-4" style="text-align: center; font-weight: bold;"><a style="color: black;"><i class="fa-solid fa-store"></i> - J MARKET</a></div>
					<div class="col-sm-8" style="text-align: center; font-style: italic;"><a style="color: black;"><i class="fa-regular fa-copyright"></i> - todos los derechos reservados 2022 | J - MARKET</a></div>
				</div>
		</footer><br>
	</div><br>
	
</body>
</html>