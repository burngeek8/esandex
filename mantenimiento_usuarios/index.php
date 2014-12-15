<?php @session_start();
  include('../php/control.php');
  include('../php/querys.php');

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Mantenimiento Usuarios - Esandex</title>
    <?php include('../template/head.html'); ?>  
  </head>
  <body>
    <?php include('../template/header.html'); ?>
    <?php while ($arrUsuarios=mysql_fetch_array($usuarios)) {?>
    <div class="tarjeta">
      <div id="idUsuario" style="display: none;"><?= $arrUsuarios['ID_USUARIO']; ?></div>
      <div class="titulo"><?= $arrUsuarios['USER']; ?></div>
      <div class="imagen">
        <img src="/img/<?= $arrUsuarios['AVATAR']; ?>">
      </div>
      <div class="detalles">
        <p class="nombre"><?= $arrUsuarios['NOMBRE']; ?></p>
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
  </body>
</html>