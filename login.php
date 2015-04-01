<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<meta name="description" content="">
	<!-- Fuerzo a internet explorer a utilizar el motor de render de chrome -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- VItal para el responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="author" type="text/plain" href="humans.txt">
	<link rel="sitemap" type="application/xml" href="sitemap.xml">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/animaciones.css">

</head>
<body>
	<section class="contenedor-login">
		<article class="registrate abajo-arriba">
			<a href="registrarse.php">REGISTRATE !!</a>
			<p>Y accede a todos nuestros cursos on-line. Conviértete en un profesional de la web. ES GRATIS
			</p>
		</article>
		<article class="login arriba-abajo">
			<form method="post" action="control.php">
				<?php 
				$error = @$_GET['error'];
				if (isset($error)) {
					echo "<div class='alert alert-danger' role='alert'>Error en los datos. Inténtalo denuevo</div>";
				} else {
					echo "<h1>Ingrese a su cuenta</h1>";
				}

				?>

				
				<input type="email" required placeholder="Ingrese Login" name="user">
				<input type="password" required placeholder="Ingrese Password" name="password">
				<input type="submit" value="Ingresar" class="enviar">
			</form>
			<span>¿Aún no te has registrado? Hazlo <a href="registrarse.php">Acá</a></span>
			<span>¿Olvidaste tu contraseña? <a href="#">Recupérala</a></span>
		</article>
	</section>

	<script type="text/javascript" src="js/codigo.js"></script>
</body>
</html>