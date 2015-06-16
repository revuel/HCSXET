<?php

	require_once '../Classes/DB_functions.php';
	
	$nombre = $_POST['nombre'];
	$app = $_POST['app'];
	$participantes = $_POST['participantes'];
	
	$id_usuario = $_COOKIE['usuario'];

	echo ($nombre . ' ');
	echo ($app . ' ');
	echo ($id_destinatario . ' ');
	print_r($participantes);
	
	try
	{
		$db = new DB_Functions();
		
		// Creación de lo que viene a ser el target
		$db->nuevoTarget($nombre, $app, $id_usuario);
		
		// Ahora hay que recuperar el id del target recientemente creado (al ser autoincrement debería ser el mayor nº)
		$id_target = $db->maxTargetid();
		
		echo($id_target);
		
		// ir insertando a todos los participantes en la tabla participantes (si no existen) e ir haciendo entradas
		// en la tabla valoraciones (e ir mandandoles un correo)
		
		
		
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	//header("Location: http://localhost/HCXET/Web/start.php"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>