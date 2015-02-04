<!DOCTYPE html>
<html>
<head>
	<title>Esandex</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true" />
	<!-- Hojas de estilo -->
	<link rel="shortcut icon" type="image/x-icon" href="img/ico.png" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
		<div class="logo"></div>
		<nav>
			<ul>
				<li>
					<a href="login">Iniciar Sesión</a>
				</li>
			</ul>
		</nav>
	</header>
	<section class="contenido">
		<section class="dominios">
			<h2>Dominios</h2>
			<h3>Ponle un nombre a tu talento </h3>
			<p>Compra un dominio y muestra tu trabajo en internet</p>
			<div class="buscador">
				<form id="formDominio" method="post">
					<input type="text" name="dominio" placeholder="Busca tu nuevo Dominio" />
					<input id="btnBuscarDominio" type="submit" class="boton" value="Consultar">
				</form>
			</div>
			<div id="respuestaDominios">
				<p class="disponible">Felicitaciones su dominio	"kattydiaz.com" está libre.</p>
				<p class="ocupado">Lo lamentamos el dominio	"esandex.com" ya está registrado.</p>
			</div>
		</section>
		<section class="contactanos">
			
		</section>
	</section>
	<footer>
		<p>Esandex 2015</p>
	</footer>
</body>
</html>