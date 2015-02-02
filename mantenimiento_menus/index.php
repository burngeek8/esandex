<?php @session_start();
  include('../php/control.php');
  include('../php/querys.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mantenimiento Menus</title>
	<?php include('../template/head.html'); ?>  
</head>
<body>
	<?php include('../template/header.html'); ?>
	<h1>Manteniento Menus</h1>
	<?php 
			$result_lis_menus = mysql_query($lis_menus,$con); 
			while($row = mysql_fetch_array($result_lis_menus)) { ?>
			<p><?=  $row["NOMBRE"] ?></p>
		<?php }  ?>
	<h4>Nuevo Menu</h4>
	<div id="respuesta"></div>
	<form id="nuevoMenu" method="post">
		<label>Nombre Menu</label>
		<input name="nombre_menu" type="text">
		<label>Link menu</label>
		<input name="link" type="text">
		<input id="botonNuevoMenu" type="submit">
	</form>
</body>
</html>