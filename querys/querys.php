<?php 
	$usuarioSesion	= $_SESSION['username'];
	$user = mysql_query("SELECT * FROM usuarios 
						 WHERE USER = '$usuarioSesion'")
			or die("problemas en consulta:".mysql_error());
	$arrayUsuario=mysql_fetch_array($user);
	//Variables de usuario
		$email = $arrayUsuario['EMAIL'];
	//Suma de totales que adeudan los usuarios
	function totalDeudaUsuario($email)
	{
		$resultDeudaUsuario = mysql_query("SELECT SUM(MONTO) as total
			    					   FROM deuda_cliente
				     				   WHERE ID_CLIENTE='$email'")
						  or die("No sabemos cuanto debes"); 

		$totalDeudaUsuario 	= mysql_fetch_array($resultDeudaUsuario, MYSQL_ASSOC);
		$resulTotal = $totalDeudaUsuario['total'];

		if (!isset($resulTotal)) {
			$resulTotal = '0';
			return $resulTotal;
		}
		else
		{
			return $resulTotal;	
		}		
	}
	
	/*
	 *	Consultas
	 */
	$deudaUsuario 	= mysql_query("SELECT * 
								   FROM deuda_cliente  
								   WHERE ID_CLIENTE = '$arrayUsuario[EMAIL]'")
				      or die("No sabemos cuanto debes ".mysql_error($con));
	$menu 			= mysql_query("SELECT * FROM menu ORDER BY ID_MENU DESC")
					  or die("problemas en consulta:".mysql_error());
	$usuario_menu 	= mysql_query("SELECT * FROM usuario_menu as a
									INNER JOIN menu as b
										ON b.ID_MENU = a.ID_MENU
									where a.ID_USUARIO = '$arrayUsuario[ID_USUARIO]'
									ORDER BY ID DESC")
									or die("problemas en consulta:".mysql_error());
	$lis_menus 		= "SELECT * FROM menu ORDER BY DESCRIPCION" 
					   or die("Error en la consulta.." . mysqli_error($con));
	
 ?>