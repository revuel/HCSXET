<?php

	require_once '../Classes/DB_functions.php';
	
	$nombrelista = $_POST['nombrelista'];
	$participantes = $_POST['participantes'];
	$myArray = explode(', ', $participantes);
	
	$id_usuario = $_COOKIE['usuario'];

	echo ($nombrelista . ' ');
	echo ($id_usuario . ' ');
	print_r($participantes);
	
	try
	{
		$db = new DB_Functions();
		
		// Creación de lo que viene a la lista
		$db->nuevaLista($nombrelista, $id_usuario);
		
		// Ahora hay que recuperar el id de la lista recientemente creado (al ser autoincrement debería ser el mayor nº)
		$id_lista = $db->maxListaid();
		
		// ir insertando a todos los participantes en la tabla participantes (si no existen) e ir haciendo entradas
		// en la tabla valoraciones (e ir mandandoles un correo)
		
		foreach($myArray as $i)
		{
			// Comprobar que el participante existe:
			$id_dest_actual = $db->existeDestinatario($i);
			
			//echo($i);
			
			if ($id_dest_actual != false)
			{
				//echo('<br> verdadero ' . $id_dest_actual); // Si existe cojo su id y lo añadimos a lista
				$db->agregarParticipantealista($id_lista, $id_dest_actual);
			}
			else
			{
				//echo('<br>  falso');
				// Si no existe, lo creo, cojo su id y lo añadimos a lista
				$db->nuevoDestinatario($i);
				$id_dest_actual = $db->existeDestinatario($i); // ya sabemos que existe porque lo acabo de crear... reciclando y eso...
				$db->agregarParticipantealista($id_lista, $id_dest_actual);
			}
		}
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	header("Location: http://localhost/HCXET/Web/start.php"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>