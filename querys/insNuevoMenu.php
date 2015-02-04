<?php 
	require 'conexion.php';
	require 'querys.php';
	mysql_set_charset('utf8');					
	//$result_ins_cliente = $link->query($ins_cliente); 
	$result_ins_menu = mysql_query($ins_menu,$con);
	echo "nuevo menu insertado";
?>