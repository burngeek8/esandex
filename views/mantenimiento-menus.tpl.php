<?php 
	require 'querys/control.php';
	require 'querys/conexion.php';
	require 'querys/querys.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>	Mantenimiento menus - Esandex</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	 <!-- Hojas de estilo -->
	<link rel="shortcut icon" type="image/x-icon" href="img/ico.png" />
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<style type="text/css">
	    body
	    {
	      border-top: 0!important;          
	    }
	    #respuestaUbicacion
	    {
	        position: fixed;
	        width: 100%;
	        background: #e9e9e9;
	        color: #333;
	        line-height: 25px;
	        height: 25px;
	        font-size: 15px;
	        bottom: 0; 
	    }
	</style>
</head>
<body>
	<header>
	    <a href="panel">
	    	<div class="logo"></div>
	    </a>
	    <div class="usuario">
	        <img src="img/avatares/<?= $arrayUsuario['AVATAR_USUARIO']; ?>">
	    </div>
	</header>
	<div class="opcionesUsuario">
	    <ul>
	        <li style="display: none;">
	            <a href="settings">CONFIGURACION</a>
	        </li>
	        <li>
	            <a href="querys/salir.php">CERRAR SESIÓN</a>
	        </li>
	    </ul>
	</div>
	<div class="menu">
        <ul>
        <?php while ($reg=mysql_fetch_array($menu)) {?>
          <li>
            <a href="<?= $reg['URL'] ?>"><?= $reg['DESCRIPCION']  ?></a>
          </li>
        <?php } ?>
        </ul>
    </div>
	<h4>Nuevo Menu</h4>
	<div id="respuesta"></div>
	<form id="nuevoMenu" method="post">
		<label>Nombre Menu</label>
		<input name="nombre_menu" type="text">
		<label>Link menu</label>
		<input name="link" type="text">
		<input id="botonNuevoMenu" type="submit">
	</form>
	<footer>
		<p>Esandex 2015</p>
	</footer>
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
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