<?php

	require_once '../Classes/DB_functions.php';
	
	$nombrelista = $_POST['nombrelista'];
	$participantes = $_POST['participantes'];
	
	$id_usuario = $_COOKIE['usuario'];

	echo ($nombrelista . ' ');
	echo ($id_usuario . ' ');
	print_r($participantes);
	
	try
	{
		$db = new DB_Functions();
		
		// Creación de lo que viene a la lista
		$db->nuevaLista($nombrelista, $id_usuario);
		
		// Ahora hay que recuperar el id del target recientemente creado (al ser autoincrement debería ser el mayor nº)
		
		
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