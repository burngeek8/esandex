<?php @session_start();
  include('../php/control.php');
  include('../php/querys.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include('../template/head.html'); ?>
    <style type="text/css">
        body 
        { 
            border-top: 0!important;
        }
        #map_canvas 
        { 
            height: 100% 
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
        #botonRegistrarUbicacion
        {
            width: 95%;
            background: #333;
            height: 45px;
            color: #e9e9e9;
            border: 0;
            border-radius:  5px;
            display: block;
            margin: 5px auto;
        }
        #botonRegistrarUbicacion:hover
        {
            background: #222;
            cursor: pointer;
        }
        .pop
        {
            text-align: center;
            background: #e9e9e9;
            width: 250px;
            height: 250px;
            position: fixed;
            left: 50%;
            top: 50%;
            margin-top: -125px;
            margin-left: -125px;
            z-index: 99;
        }
        .pop input
        {
            border-radius: 5px;
            border: 1px #333 solid;
            display: block;
            height: 45px;
            margin: 0 auto;
            padding: 0 0 0 10px;
            width: 90%;
        }
    </style>
    
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBJv2TuwZQ8DZX4KcREb18gVqIcn7C0IKA&sensor=TRUE">
    </script>
    
  </head>
  <body>
    <?php include('../template/header.html'); ?>
    <form id="nuevaUbicacion" class="pop" method="post"> 
        <h1>Bienvenido de nuevo <?= $arrayUsuario['USER']; ?>?</h1> 
      <input type="hidden" name="usuario" placeholder="Nombre" value="<?= $arrayUsuario['USER']; ?>">
      <input type="hidden" name="miUbicacion" id="ubicacion" style="width: 200px;">
      <input type="submit" id="botonRegistrarUbicacion" value="Aceptar">
    </form>
    <div id="map_canvas" style="width:100%; height:9 0%"></div>
    <div id="respuestaUbicacion"><?= $arrayUsuario['USER']; ?></div>


    <script type="text/javascript">
        $(document).on('ready', inicio); 
        function inicio () {
               $('#botonRegistrarUbicacion').on('click', registrarUbicacion);   
           }   
        function registrarUbicacion()
            {
                
                var url = "../php/insUbicacionPrueba.php";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#nuevaUbicacion").serialize(),
                    success: function(data){
                        $("#respuestaUbicacion").html(data);
                        }
                });
                 $('#nuevaUbicacion').css('display', 'none');
                return false;
            }


      var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  var crd = pos.coords;
  console.log('Your current position is:');
  console.log('Latitude : ' + crd.latitude);
  console.log('Longitude: ' + crd.longitude);
  console.log('More or less ' + crd.accuracy + ' meters.');

  document.getElementById('ubicacion').value=crd.latitude + "," + crd.longitude;
    var miUbicacion = new google.maps.LatLng(crd.latitude,crd.longitude);
    //
  var mapOptions = {
      center: miUbicacion,
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.HYBRID
  };
  //
  var map = new google.maps.Map(document.getElementById("map_canvas"),
      mapOptions);
  var marker = new google.maps.Marker({
      position: miUbicacion,
      map: map,
      title:"Hello World!"
    });
};

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
};
navigator.geolocation.getCurrentPosition(success, error, options);

    </script>
  </body>
</html>