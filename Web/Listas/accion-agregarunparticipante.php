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
		// si no, lo creas seleccionas la id y lo enchufas a contiene
		//$db->agregarParticipantealista($lista);
		
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	//header("Location: http://localhost/HCXET/Web/Listas/borrarlista.php"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>