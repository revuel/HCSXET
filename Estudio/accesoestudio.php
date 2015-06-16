<?php
		
	require_once '../Web/Classes/DB_functions.php';
	
	$destinatario = $_POST['id_destinatario'];
	$target = $_POST['id_target'];
	$token = $_POST['token'];
	
	try
	{
		$db = new DB_Functions();
		
		// Seleccionar id_target e id_destinatario segun los nombres de target y de destinatario de la BD
		$destinatario = $db->getIddestinatario($destinatario);
		$target = $db->getIdtarget($target);
		
		$result = $db->controlAccesoEstudio($destinatario, $target, $token);
		
		if($result == true)
		{
			// Inicio de sesión con id de usuario
			session_start();
			
			$_SESSION['destar'] = $destinatario + $target;
			
			$cookie_name1 = "destinatario";
			$cookie_value1 = $destinatario;
			setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

			$cookie_name2 = "target";
			$cookie_value2 = $target;
			setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
			
			header("Location: http://localhost/HCXET/Estudio/estudio.php");
			die();
			
		}
		else
		{
			header("Location: http://localhost/HCXET/Estudio/formestudio.php");
			die();
		}
	}
	catch(PDOException $e)
	{
		// posible captura de mensaje
	}
    
?>