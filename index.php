<?php @session_start();
  include('php/control.php');
  include('php/querys.php');

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>ESANDEX</title>
    <?php include('template/head.html'); ?>  
    <script type="text/javascript">
    $(document).on('ready', pantallaActiva);
        function pantallaActiva()
        {
          $( ".logo a" ).attr("href", '#');
          if($('.monto').html() == 0)
          {
            $('.monto').html('0.00');
            console.log('no debe nada');
          } 
        }
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

    </script>  
  </head>
  <body>
    <?php include('template/header.html'); ?>
    <p class="mensajeParaElUsuario">Bienvenido <strong><?= $arrayUsuario['USER']; ?></strong>, estamos trabajando para habilitarte las aplicaciones que tenemos para ti, se paciente y vuelve luego. </p>
      <div class="deuda">
        <p>Tu deuda hasta hoy es</p>
        
        <div class="montoDeuda"> S/. <span class="monto"> <?= $totalDeudaUsuario['totalDeudaUsuario'] ?> </span></div>
      </div>
        <div class="menu">
          <ul>
          <?php while ($reg=mysql_fetch_array($menu2)) {?>
            <li>
              <a href="<?= $reg['LINK'] ?>"><?= $reg['NOMBRE']  ?></a>
            </li>
          <?php } ?>
          </ul>
        </div>
    <div id="respuestaUbicacion"><?= $arrayUsuario['USER']; ?></div>
    <script type="text/javascript">
      pepe();
    </script>
  </body>
</html>