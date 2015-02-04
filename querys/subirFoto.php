<?php 
	include('../php/controlUser.php');
	include("../php/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body
		{
			color: #e9e9e9;
			text-align: center;
		}
		.boton
		{
			background-color: #333;
			border: 1px solid #333;
			color: #e9e9e9;
			border-radius: .3em;
			height: 36px;
			width: 150px;
		}
		.boton:hover
		{
			background-color: #444;
			cursor: pointer;
		}
		.defaultFoto
		{
			width: 200px;
		}
	</style>
</head>
<body>
	<?php
	$carpeta = "../img/comprobantes/";
	opendir($carpeta);
	$destino = $carpeta.$_FILES['foto']['name'];
	copy($_FILES['foto']['tmp_name'],$destino);
	$nombre=$_FILES['foto']['name'];
	echo "<img class='defaultFoto' src=\"../img/comprobantes/$nombre\">";
?>
	<div id="respuestaComprobante"></div>
	<form id="formularioComprobarPago" action="confirmarComprobante.php" method="post" >
		<input type="hidden" name="numeroRecibo" value="<?= $_SESSION['numeroRecibo']; ?>">
		<input type="hidden" name='fotoComprobante' value='<?= $nombre=$_FILES['foto']['name']?>'><br />		
		<input id="comprobarPago" class="boton" type="submit" value="COMPROBAR PAGO">
	</form>
	<!-- Librerias de JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).on('ready', inicio);
		function inicio()
		{
			$('#comprobarPago').on('click', comprobarPago);
		}
		function comprobarPago()
		{
			var url = "../php/confirmarComprobante.php";

			$.ajax({
				type: "POST",
				url: url,
				data: $("#formularioComprobarPago").serialize(),
				success: function(data){
					$("#respuestaComprobante").html(data);
					}
			});
			 $('.input').val('');
			return false;
		}
	</script>
</body>
</html>
