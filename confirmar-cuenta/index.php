<!DOCTYPE html>
<html>
<head>
	<title>Confirmar Cuenta - Esandex</title>
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
	<script language="JavaScript">
 
		function cerrar() {
		var ventana = window.self;
		ventana.opener = window.self;
		ventana.close();
		}
 
</script>
</head>
<body>
	<div class="formulario">
		<h1>Confirmar Cuenta</h1>
		<div id="respuestaLogin"></div>
		<form id="formLogIn" method="post">
			<label>Email</label>
			<input type="email" name="email" value="<?= $_GET['email']?>" readonly>
			<label>Usuario</label>
			<input type="text" name="user" placeholder="Nombre de usuario" >
			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña">
			<input  id="LogIn" class="botonFormulario" value="Entrar" type="submit">
		</form>
	</div>
	<div class="opcionCuenta">
		<p>¿No tienes una cuenta?</p>
		<a href="/register">Crear una cuenta</a>
	</div>
</body>
</html>