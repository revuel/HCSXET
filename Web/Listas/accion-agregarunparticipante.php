<?php

	require_once '../Classes/DB_functions.php';
	
	$lista = $_POST['lista'];
	$email = $_POST['email'];
	
	echo ($lista . ' ');
	echo ($email . ' ');
	
	try
	{
		$db = new DB_Functions();
		
		// Comprobar si el participante existe o no
		// si existe seleccionas su id y la enchufas en contiene
		$id_dest_actual = $db->existeDestinatario($email);
		
		if ($id_dest_actual != false)
		{
			//echo('<br> verdadero ' . $id_dest_actual); // Si existe cojo su id y lo añadimos a lista
			$db->agregarParticipantealista($lista, $id_dest_actual);
		}
		else
		{
			//echo('<br>  falso');
			// Si no existe, lo creo, cojo su id y lo añadimos a lista
			$db->nuevoDestinatario($email);
			$id_dest_actual = $db->existeDestinatario($email); // ya sabemos que existe porque lo acabo de crear... reciclando y eso...
			$db->agregarParticipantealista($lista, $id_dest_actual);
		}
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	header("Location: http://localhost/HCXET/Web/Listas/nuevoparticipante.php"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>