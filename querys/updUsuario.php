<?php 
	
	$numeroChecks = $_POST['numeroChecks'];
	$checked_count = count($_POST['id_menu']);
	echo $numeroChecks.' y '.$checked_count;
	if(!empty($_POST['id_menu']))
	{
		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['id_menu'] as $selected)
		{
			echo "el usuario a insertar: ".$_POST['id_usuario']."<br />";
			echo 'menu seleccionado: '.$selected."</br>";
		}
	}

	
 ?>