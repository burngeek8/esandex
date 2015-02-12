<?php 
  require 'querys/control.php';
  require 'querys/conexion.php';
  require 'querys/querys.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <title> Mantenimiento menus - Esandex</title>
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


    <?php while ($arrUsuarios=mysql_fetch_array($usuarios)) {?>
    <div class="tarjeta">
      <div id="idUsuario" style="display: none;"><?= $arrUsuarios['ID_USUARIO']; ?></div>
      <div class="titulo"><?= $arrUsuarios['USER']; ?></div>
      <div class="imagen">
        <img src="/img/avatares/<?= $arrUsuarios['AVATAR_USUARIO']; ?>">
      </div>
      <div class="detalles">
        <p class="email"><?= $arrUsuarios['EMAIL']; ?></p>
      </div>
      <div class="social"></div>
      <div class="opciones">
        <div class="agregarMenus" onclick="asignarMenu(this);"></div>
      </div>   
    </div>
    <?php } ?>
    <div class="botonNuevo"></div>
    <div id="respuestaUsuarioMenu"></div>
     <!-- Acceso -->
    <div class="popup popMenus" style="display: none;">
      <div class="tarjeta acceso">
        <div class="titulo">ACCESO <?= $arrUsuarios['USER']; ?>
          <div class="cerrar cerrarPopups"></div>
        </div>
        <form id="formMenuUsuarios" class="formularioPopup">
          <input id="inputIdUsuario" class="vaciar" name="id_usuario" type="text" value="">
          <input type="text" class="vaciar" name="numeroChecks" id="checksSeleccionados">
          <div class="listaMenus">
            <?php while ($arrMenus=mysql_fetch_array($menu)) {?>
              <div class="opcionMenu">
                <input  onchange="encontrarNumeroDeAccionesSeleccionadas(this);" type="checkbox" id="Menu<?= $arrMenus['ID']; ?>" name="id_menu" value="<?= $arrMenus['ID'] ?>" />
                <label for="Menu<?= $arrMenus['ID']; ?>"><?= $arrMenus['NOMBRE_MENU']; ?></label>
              </div>
            <?php } mysql_data_seek($menu, 0);?>      
          </div>
          <input id="actualizarMenusUsuarios" class="botonPopup" type="submit" value="Actualizar" >
        </form>
      </div>
    </div>
      <!-- Nuevo usuario -->
    <div id="respuestaRegister"></div>
    <div class="popup popNuevoUsuario">
      <div class="tarjeta nuevoUsuario">
        <div class="titulo">NUEVO USUARIO
          <div class="cerrar cerrarPopups"></div>
        </div>
        <form class="formulario" id="formRegister" method="post">
          <label>Email</label>
          <input type="text" name="email" class="vaciar">
          <input class="botonFormulario" id="Register" type="submit" value="Enviar Invitacion">
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