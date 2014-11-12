<?php @session_start();
  include('php/control.php');
  include('php/querys.php');

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>ESANDEX</title>
    <?php include('template/head.html'); ?>    
  </head>
  <body>
    <?php include('template/header.html'); ?>
    <p class="mensajeParaElUsuario">Bienvenido <strong><?= $arrayUsuario['USER']; ?></strong>, estamos trabajando para habilitarte las aplicaiones que tenemos para ti, se paciente y vuelve luego. </p>
      <div class="deuda">
        <p>Tu deuda hasta hoy es</p>
        
        <div class="montoDeuda"> S/. <?= $totalDeudaUsuario['totalDeudaUsuario'] ?></div>
      </div>
        <?php while ($reg=mysql_fetch_array($menu2)) {?>
        <div class="menu">
          <ul>
            <li>
              <a href="#"><?= $reg['NOMBRE']  ?></a>
            </li>
          </ul>
        </div>
        <?php } ?>
    <div id="respuestaUbicacion"><?= $arrayUsuario['USER']; ?></div>
  </body>
</html>