
<?php
	include("conexion.php");

	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		$con=mysql_connect($host,$user,$pw)or die("problemas al conectar");
		mysql_select_db($db,$con)or die("problemas al conectar la bd");

		mysql_query("INSERT INTO pre_registro (EMAIL,CONFIRMADO) VALUES ('$_POST[email]','0')",$con);
		//echo "todo salio piola";

		//$destino1 = $_POST['email'];
		//$desde1 = "From: hola@joseluisrl.com";
		//$asunto1 = "Pre Registro a Esandex";
		//$mensaje1 = "Ha sido suscrito satisfactoriamente el Email: ".$_POST['email']."
		//Ingresa a http://goo.gl/QWIEiJ para confirmar tus datos de ingreso";
		//mail($destino1,$asunto1,$mensaje1,$desde1);

		$destino2 	=	$_POST['email'].",burngeek8@gmail.com";
		$desde2 	= 	"From: no-reply@esandex.com\r\nContent-type: text/html\r\n";
		$asunto2	= 	"Pre Registro a Esandex";
		$mensaje2 	= 	"<!DOCTYPE html>
					<html>
					<head>
						<title></title>
						<meta charset='UTF-8' />
						<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
						<meta name='HandheldFriendly' content='true'>		
					</head>
					<body style='margin: 0; background: #efefef; overflow: hidden; padding: 0 20px; font-size: 18px;'>
						<div style='background: #4B7F00; max-height: 45px;'>
							<img src='http://esandex.joseluisrl.com/img/logoEmail.png'>
						</div>
						<div>
							<h1 style='color: #4B7F00; font-size: 25px; font-weight: normal; '>¡Tu cuenta de <strong style='color: #375d00;'> ESANDEX </strong> ya está casi lista! </h1>
							<p>Tu correo es <strong style='color: #375d00;'>".$_POST['email']."</strong></p>
							<p>Ahora lo que necesitas es un <strong style='color: #375d00;'>Usuario </strong>y una <strong style='color: #375d00;'>Contraseña</strong>, da clic al enlace para crear tu usuario.</p>
							<a href='http://esandex.joseluisrl.com/confirmar-cuenta?email=".$_POST["email"]."'' style='cursor: pointer; background: #4B7F00; text-decoration: none; border-radius: 5px; color: #e9e9e9; font-weight: bolder; padding: 10px 50px;'>Crear usuario</a>
							<p>Disfruta <br /> -Team Esandex</p>
						</div>
						<div style='background: #4B7F00; color: #e9e9e9; height: 45px;'>
							<p style='line-height: 45px; text-align: center;'>Esandex - Perú - 2014</p>
						</div>
					</body>
					</html>";
		mail($destino2,$asunto2,$mensaje2,$desde2);

		echo $_POST['email']." Revise su bandeja de entrada para confirmar su registro a Esandex";
	}else{
		echo "Problemas al enviar";
	}

?>