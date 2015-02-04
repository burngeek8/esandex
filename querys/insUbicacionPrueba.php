<?php 
	session_start();
	include("conexion.php"); 

	if(isset($_POST['miUbicacion']) 	&& !empty($_POST['miUbicacion']))
	{


		$con = mysql_connect($host,$user,$pw)
			or die("problemas al conectar con el servidor");

		mysql_select_db($db,$con)
			or die("problemas al conectar db");
			mysql_query("INSERT INTO ubicacionesPrototipo (NOMBRE,UBICACION)
						 VALUES ('$_POST[usuario]','$_POST[miUbicacion]') ",$con);

			echo "Te encontré!!! ".$_POST['usuario'];
	}		
	else
	{
		echo "Algo salio mal ".$_POST['usuario'];
	}			 
?>