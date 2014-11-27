<!DOCTYPE html>
<html>
<head>
	<title>Register - Esandex</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	<!-- Hojas de estilo -->
	<link rel="shortcut icon" type="image/x-icon" href="../img/logoIco.png">
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">	
	<!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	
</head>
<body>
	<div class="formulario">
		<h1>Crear Cuenta</h1>
		<div id="respuestaRegister"></div>
		<form id="formRegister" method="post">
			<label>Email</label>
			<input class="vaciar" type="email" name="email" placeholder="Email">			
			<input  id="Register" class="botonFormulario" value="Registrarme" type="submit">
		</form>
	</div>
	<div class="opcionCuenta" >
		<p>¿Ya tienes una cuenta?</p>
		<a href="/login">Iniciar Sesión</a>
	</div>
</body>
</html>