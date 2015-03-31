<?php include ('seguridad.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Creando FRONT-END</title>
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
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<h1><img src="img/html-logo.png"></h1>
		<nav class="menu"> 
			<ul>
				<li><a href="">Inicio</a></li>
				<li><a href="">Cursos</a></li>
				<li><a href="">Proyectos</a></li>
				<li><a href="">Contacto</a></li>
			</ul>
		</nav>
		<?php echo $_SESSION['nombreusuario'];?>
		<a href="salir.php">CErrar sESION</a>
	</header>
	<section class="portada">
		<img src="img/portada.jpg">
	</section>
	<section class="articulos">
		<article class="lenguajes">
			<img src="img/ico-html.png">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatem dolorum suscipit, provident illum esse debitis magni assumenda. Nesciunt sit fugit similique illo. Porro, sit, quod! Debitis maiores quos perferendis.</p>
			<a href="">Ver mas</a>
		</article>
		<article class="lenguajes">
			<img src="img/ico-css.png">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque non sapiente dolor, accusantium cupiditate autem qui mollitia ducimus quam nisi iste omnis quos, maxime quasi, sequi possimus sed porro aspernatur!</p>
			<a href="">Ver mas</a>
		</article>
		<article class="lenguajes">
			<img src="img/ico-js.png">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, nesciunt. Ipsa deleniti ea excepturi beatae iusto labore quaerat minima. Quam ullam eaque quis repellat veritatis placeat, incidunt debitis modi voluptatum.</p>
			<a href="">Ver mas</a>
		</article>
	</section>
	<footer>
		<span>Desarrollado por <a href="http://humanstxt.org/ES" target="_blank">Carlos Garcés</a></span>
		<p>Sígueme en :
			<a href="https://www.facebook.com/carlosyjesu" target="_blank"><i class="iconos fa fa-facebook-square"></i></a>
			<a href="twitter.com" target="_blank"><i class="fa fa-twitter-square iconos"></i></a>
			<a href="https://www.youtube.com/channel/UCtuhNITv71iamLIqn1lB19g" target="_blank"><i class="fa fa-youtube-square iconos"></i></a>
		</p>
		</footer>


	<script type="text/javascript" src="js/codigo.js"></script>
</body>
</html>