<?php

	require_once '../Classes/DB_functions.php';
	
	$lista = $_POST['lista'];
	
	echo ($lista . ' ');
	
	try
	{
		$db = new DB_Functions();
		
		// Creación de lo que viene a la lista
		$db->borrarlista($lista);
		
		// Ahora hay que recuperar el id del target recientemente creado (al ser autoincrement debería ser el mayor nº)
		
		
		// ir insertando a todos los participantes en la tabla participantes (si no existen) e ir haciendo entradas
		// en la tabla valoraciones (e ir mandandoles un correo)
		
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	header("Location: http://localhost/HCXET/Web/Listas/borrarlista.php"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>