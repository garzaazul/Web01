<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="author" type="text/plain" href="humans.txt">
	<link rel="sitemap" type="application/xml" href="sitemap.xml">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<section class="conte-formu">
		<form method="post" action="registrar-usuario.php">
			<?php 
			$error= @$_GET['errorcorreo'];
			$msn= @$_GET['msn'];
			if (isset($error)) {
				echo "<div class='alert alert-danger' role='alert'>Ups! el correo ya existe. Intenta con otro ;)</div>";
			}
			else if (isset($msn)) {
				echo "<div class='alert alert-success' role='alert'>Felicidades! ya eres parte de una gran comunidad que aprende con nosotros :).</div>";
				echo "<a href='login.php'>Ir a login</a>";
			} else {
				echo "<div class='alert alert-info' role='alert'>Quiero registrarme como usuario de los cursos</div>";
			}
			?>

			
			<input type="text" required placeholder="Ingresa tu Nombre" name="nombre">
			<input type="email" required placeholder="Ingresa tu correo. Servirá de login" name="correo">
			<input type="password" required placeholder="Ingresa tu Password" name="password">
			<input type="submit" value="Registarme" class="enviar">

		</form>

	</section>
	<script type="text/javascript" src="js/codigo.js"></script>
</body>
</html>