<?php
	include('conexion.php');
	$con = mysql_connect($host,$user,$pw)
	or die("problemas al conectar con el servidor");

	mysql_select_db($db,$con)
	or die("problemas al conectar db");

	$usuarioSesion	= $_SESSION['username'];
	$user = mysql_query("SELECT * FROM usuarios where USER = '$usuarioSesion'")
	or die("problemas en consulta:".mysql_error());
	$arrayUsuario=mysql_fetch_array($user);

	//listado de datos
	$lis_menus 		= "SELECT * FROM menu ORDER BY NOMBRE" 
					   or die("Error en la consulta.." . mysqli_error($con));
	//Inserciones a la base de datos 
	$ins_menu	= "INSERT INTO menu (NOMBRE,LINK)
				   VALUES ('$_POST[nombre_menu]','$_POST[link]')"
				   or die("Error en la consulta.." . mysqli_error($link));


	//Suma de totales que adeudan los usuarios
	$resultDeudaUsuario = mysql_query("SELECT SUM(RESTA) as totalDeudaUsuario 
								   FROM deuda 
								   WHERE CLIENTE='$arrayUsuario[EMAIL]'")
							or die("No sabemos cuanto debes"); 

	$totalDeudaUsuario = mysql_fetch_array($resultDeudaUsuario, MYSQL_ASSOC);
	//Lista de deudas del usuario logueado
	$deudaUsuario = mysql_query("SELECT * 
								   FROM deuda  
								   WHERE CLIENTE = '$arrayUsuario[EMAIL]'")
							or die("No sabemos cuanto debes"); 
	
	
	//Listado de menus
	$menu = mysql_query("SELECT * FROM menu ORDER BY ID DESC")
	or die("problemas en consulta:".mysql_error());
	//Menu 2
	$menu2 = mysql_query("SELECT * FROM usuario_menu as a
							INNER JOIN menu as b
								ON b.ID = a.ID_MENU
							where a.ID_USUARIO = '$arrayUsuario[ID]'
							ORDER BY ID DESC")
	or die("problemas en consulta:".mysql_error());

	$usuarios = mysql_query("SELECT * FROM usuarios ORDER BY ID DESC")
	or die("problemas en consulta:".mysql_error());

	/*$listadoDeChats = mysql_query("SELECT * FROM chat 	AS a
									INNER JOIN usuarios AS b
										ON b.ID = a.EMISOR
									where a.RECEPTOR = '$arrayUsuario[ID]'										
									ORDER BY FECHA DESC")
	or die("problemas en consulta:".mysql_error());*/
	//Listado de menus
	

	/*$registro = mysql_query("SELECT * FROM contacto ORDER BY ID DESC")
	or die("problemas en consulta:".mysql_error());*/

	/*$clientes = mysql_query("SELECT * FROM clientes ORDER BY ID DESC")
	or die("problemas en consulta:".mysql_error());*/

	/*$recibo = mysql_query("SELECT * FROM recibos where EMAIL_DESTINO = '$arrayUsuario[EMAIL]' ORDER BY NRO_RECIBO DESC")
	or die("problemas en consulta:".mysql_error());*/

	/*$revision = mysql_query("SELECT * FROM recibos where ESTADO = 'REVISION' ORDER BY NRO_RECIBO DESC")
	or die("problemas en consulta:".mysql_error());*/
	//Ingresos	
	/*$ingresos = mysql_query("SELECT * FROM recibos where ESTADO = 'CANCELADO' ORDER BY NRO_RECIBO DESC")
	or die("problemas en consulta:".mysql_error());*/
	//Listado Clientes
	/*$lisClientes = mysql_query("SELECT * FROM clientes ORDER BY ID DESC")
	or die("problemas en consulta:".mysql_error());
	$arrayClientes=mysql_fetch_array($lisClientes);*/
	//Listado de recibos
	//==$lisRecibos = mysql_query("SELECT * FROM recibos ORDER BY NRO_RECIBO DESC")
	//==or die("problemas en consulta:".mysql_error());
	/*$lisRecibos = mysql_query("SELECT *
								FROM recibos AS a
								INNER JOIN recibo_detalle AS b
								ON a.NRO_RECIBO=b.RECIBO")
	or die("problemas en consulta:".mysql_error());*/

	//Listado de deudores
	/*$lisDeudores = mysql_query("SELECT * FROM deuda WHERE RESTA != '0' ORDER BY FECHA_REGISTRO DESC")
	or die("problemas en consulta:".mysql_error());*/

	//Suma de totales que Ingresos 
	/*$resultIngresos = mysql_query("SELECT SUM(MONTO_TOTAL) as totalIngresos FROM recibos WHERE ESTADO='CANCELADO'");   
	$totalIngresos = mysql_fetch_array($resultIngresos, MYSQL_ASSOC);*/

	//Suma de totales que adeudan 
	/*$result = mysql_query("SELECT SUM(RESTA) as total FROM deuda");   
	$totalDeuda = mysql_fetch_array($result, MYSQL_ASSOC);*/

	/*$result = mysql_query("SELECT SUM(MONTO) as total FROM deuda WHERE idusuario=1");   
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	echo $row["total"];*/
	/*function deudaUsuario($email)
	{
		$deudaUsuario = mysql_query("SELECT * 
								   FROM deuda_cliente
								   WHERE CLIENTE = '$email'")
							or die("No sabemos cuanto debes");

		$listaDeudas =  while ($reg=mysql_fetch_array($deudaUsuario))
						{
							$date = date_create($reg['FECHA_REGISTRO']);
							echo "	<div class='item'>
		             	  		     	<div class='fecha'>".date_format($date, 'd M Y')."</div>
					       				<div class='detalle'>".$reg['DETALLE']."</div>
					          			<div class='monto'>S/.".$reg['MONTO']."</div>									
									</div>";
						};
		return $listaDeudas;
	} */
 ?>