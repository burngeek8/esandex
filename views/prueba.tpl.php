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
			<div class="content">
				<h2>Dominios</h2>
				<h3>Ponle un nombre a tu talento </h3>
				<p>Compra un dominio y muestra tu trabajo en internet</p>
				<div class="buscador">
					<form id="formDominio" method="post">
						<input type="text" name="dominio" placeholder="Busca tu nuevo Dominio" />
						<input id="btnBuscarDominio" type="submit" class="boton" value="Consultar">
					</form>
				</div>
				<div id="respuestaDominios"></div>
			</div>
			<iframe class="fbBox" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fesandex&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=749322088466311" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
		</section>
		<section class="contactanos">
			<h2>Contactenos</h2>
			<p class="">Si ya decidió que dominio desea comprar comuníquese con nosotros a través de este formulario</p>
			<form id="formContacto" class="formContacto" method="post">
				<label>Email</label>
				<input name="email" class="vaciar" type="email" />
				<label>Escriba su pedido</label>
				<textarea name="pedido" class="vaciar"></textarea>
				<div id="respuestaContacto"></div>
				<input id="btnContacto" type="submit" class="boton" value="Enviar" />
			</form>
		</section>
	</section>
	<footer>
		<p>Esandex 2015</p>
	</footer>
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/analytics.js"></script>
	<script type="text/javascript">
		  WebFontConfig = {
		    google: { families: [ 'Open+Sans::latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })(); 
	</script>
</body>
</html>