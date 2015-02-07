<?php
	$host 			= "localhost";
	$user 			= "esandex_main";
	$pw 			= "w8uiq9da";
	$db 			= "esandex_main";
	$con = mysql_connect($host,$user,$pw)
	or die("problemas al conectar con el servidor");
	mysql_select_db($db,$con)
	or die("problemas al conectar db");
	
?>