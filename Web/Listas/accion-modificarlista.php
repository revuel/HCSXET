<?php

	require_once '../Classes/DB_functions.php';
	
	$lista = $_POST['lista'];
	$email = $_POST['email'];
	$myArray = explode(', ', $email);
	
	echo ($lista . ' ');
	print_r($email);
	
	try
	{
		$db = new DB_Functions();
		
		// Borrar la lista de contiene
		$db->desvincularParticipantes($lista);
		
		if (strlen(trim($myArray[0])) == 0)
		{
			echo("solo había blancos");
		}
		else
		{
			foreach($myArray as $i)
			{
				// Comprobar que el participante existe:
				$id_dest_actual = $db->existeDestinatario($i);
				
				//echo($i);
				
				if ($id_dest_actual != false)
				{
					//echo('<br> verdadero ' . $id_dest_actual); // Si existe cojo su id y lo añadimos a lista
					$db->agregarParticipantealista($lista, $id_dest_actual);
				}
				else
				{
					//echo('<br>  falso');
					// Si no existe, lo creo, cojo su id y lo añadimos a lista
					$db->nuevoDestinatario($i);
					$id_dest_actual = $db->existeDestinatario($i); // ya sabemos que existe porque lo acabo de crear... reciclando y eso...
					$db->agregarParticipantealista($lista, $id_dest_actual);
				}
			}
		}
	}
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	header("Location: http://localhost/HCXET/Web/Listas/listas.php"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>