<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Esandex</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	<!-- Hojas de estilo -->
	<link rel="shortcut icon" type="image/x-icon" href="../img/ico.png">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">	
	<style type="text/css">
		body
		{
			border-top: 5px #4B7F00 solid;
		}
	</style>
	<!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script> 
</head>
<body>
	<div class="formulario">
		<a href="/">
			<div class="logo"></div>			
		</a>
		<h1>Iniciar Sesión</h1>
		<div id="respuestaLogin" class="cajaDialogo">
			<img src="../img/loader.gif">
		</div>
		<form id="formLogIn" method="post">
			<label>Usuario</label>
			<input type="text" name="user" placeholder="Nombre de usuario">
			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña">
			<input  id="LogIn" class="botonFormulario" value="Entrar" type="submit">
		</form>
	</div>
	<div class="opcionCuenta" style="display: none;">
		<p>¿No tienes una cuenta?</p>
		<a href="../register">Crear una cuenta</a>
	</div>
	
</body>
</html>