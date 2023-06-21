<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso al sistema</title>
	<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
		<div class="container" style="background-color: #ffffff; padding-top: 10px;">
		<header style="text-align: center;background: orange;">
			<img src="../img/logo01.png" width="300px" height="189px">
			<hr/>
		</header>

		<section style="background: #59cee1">
			<h3 style="text-align: center;">Listado de nuestros productos <br>disponibles en linea <br><i class="fa-solid fa-signal"></i></h3>
			<br>
			<?php
				include("conexion.php");
				$cn=new Conexion();
				$cn->ProductList();
			?>
		</section>
		<footer>
			<div class="container" style="background-color: orange; height: 50px; padding-top: 10px;">
				<div class="row">
					<div class="col-sm-4" style="text-align: center; font-weight: bold;"><a style="color: black;"><i class="fa-solid fa-store"></i> - J MARKET</a></div>
					<div class="col-sm-8" style="text-align: center; font-style: italic;"><a style="color: black;"><i class="fa-regular fa-copyright"></i> - todos los derechos reservados 2022 | J - MARKET</a></div>
				</div>
			</div>
		</footer>
		<br>				
	</div>

</body>
</html>