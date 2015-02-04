<?php
	@session_start();
	if($_SESSION['control'] != "hola")
		{
			session_destroy();
			header('location: login');
		}

?>