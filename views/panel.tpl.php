<?php 
	require 'querys/control.php';
	require 'querys/conexion.php';
	require 'querys/querys.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Panel - Esandex</title>
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
	    .<?= $arrayUsuario['USER']; ?>
	    {
	        display: none;
	    }
	</style>
</head>
<body>
	<header>
	    <div class="logo"></div>
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
        <?php while ($reg=mysql_fetch_array($usuario_menu)) {?>
          <li>
            <a href="<?= $reg['URL'] ?>"><?= $reg['DESCRIPCION']  ?></a>
          </li>
        <?php } ?>
        </ul>
    </div>
	<p class="mensajeParaElUsuario">Bienvenido <strong><?= $arrayUsuario['USER']; ?></strong>, estamos trabajando para habilitarte las aplicaciones que tenemos para ti, se paciente y vuelve luego. </p>

	<div class="deuda">
        <p>Tu estado de cuenta es</p>   
        <div class="montoDeuda"> S/. <span class="monto"> <?= totalDeudaUsuario($email) ?> </span></div>
    </div>
    <div class="listaDeudas">
      <?php while ($reg=mysql_fetch_array($deudaUsuario)) {?>
        <div class="item">
          <?php $date = date_create($reg['FECHA_REGISTRO']); ?>      
          <div class="fecha"><?= date_format($date, 'd M Y') ?></div>
          <div class="detalle"><?= $reg['DETALLE']  ?></div>
          <div class="monto">S/. <?= $reg['MONTO']  ?></div>
        </div>
      <?php } ?>
    </div>
    <footer>
		<p>Esandex 2015</p>
	</footer>
	<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		function pepe()
	      {
	        console.log('se ejecuto la funcion');
	        if($('.menu ul li').length == 0)
	        {
	          console.log('no hay menus asignados');
	        } 
	        else
	        {
	          $('.mensajeParaElUsuario').css('display', 'none');
	          console.log('parece tener menus');          
	        }
	      }
      pepe();
    </script>
</body>
</html>