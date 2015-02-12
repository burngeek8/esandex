<?php 
  require 'querys/control.php';
  require 'querys/conexion.php';
  require 'querys/querys.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <title> Clientes - Esandex</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">
   <!-- Hojas de estilo -->
  <link rel="shortcut icon" type="image/x-icon" href="img/ico.png" />
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
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
        <?php while ($reg=mysql_fetch_array($usuario_menu)) {?>
          <li>
            <a href="<?= $reg['URL'] ?>"><?= $reg['DESCRIPCION']  ?></a>
          </li>
        <?php } ?>
        </ul>
    </div>

    <!-- Lista de Clientes -->
    <?php while ($arrClientes=mysql_fetch_array($lis_clientes)) {?>
      <div class="tarjeta">
        <div id="idUsuario" style="display: none;"><?= $arrClientes['ID_CLIENTE']; ?></div>
        <div class="titulo"><?= $arrClientes['USER']; ?></div>
        <div class="imagen">
          <img src="/img/avatares/<?= $arrClientes['AVATAR_USUARIO']; ?>">
        </div>
        <div class="detalles">
          <p class="email"><?= $arrClientes['EMAIL']; ?></p>
        </div>
        <div class="social"></div>
        <div class="opciones">
          <div class="agregarMenus" onclick="asignarMenu(this);"></div>
        </div>   
      </div>
    <?php } ?>

    <div class="botonNuevo"></div>
    <div id="respuesta"></div>
   
    <!-- Nuevo cliente -->
    <div id="respuestaRegister"></div>
    <div class="popup popNuevoUsuario">
      <div class="tarjeta nuevoCliente">
        <div class="titulo">NUEVO USUARIO
          <div class="cerrar cerrarPopups"></div>
        </div>
        <form class="formulario" id="formInsCliente" method="post">
          <label>Nombre</label>
          <input type="text" name="nombre_cliente" class="vaciar">
          <label>Email</label>
          <input type="text" name="email" class="vaciar">
          <input class="botonFormulario" id="btnInsCliente" type="submit" value="Guardar">
        </form>
      </div>
    </div>
    <div class="botonNuevo"></div>  

  <footer>
    <p>Esandex 2015</p>
  </footer>
  <!-- Scripts -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/analytics.js"></script>
  </body>
</html>