<?php

	require_once '../Web/Classes/DB_functions.php';
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	try
	{
		$db = new DB_Functions();
		$usuarioid = $db->getIdusuario($user); // crear metodo
		
		$result = $db->acceso($user, $pass);
		
		if($result == true)
		{
			// Inicio de sesión con id de usuario
			session_start();
			
			$_SESSION['id'] = $user;
			
			$cookie_name1 = "usuario";
			$cookie_value1 = $usuarioid;
			setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");
			
			header("Location: http://localhost/HCXET/Web/start.php");
			die();
			
		}
		else
		{
			header("Location: http://localhost/HCXET/Login/formconectar.php");
			die();
		}
	}
	catch(PDOException $e)
	{
		// posible captura de mensaje
	}
    
?>