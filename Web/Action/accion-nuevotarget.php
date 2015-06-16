<?php

	require_once '../Classes/DB_functions.php';
	
	$nombre = $_POST['nombre'];
	$app = $_POST['app'];
	$participantes = $_POST['participantes'];
	
	$myArray = explode(', ', $participantes);
	//print_r($myArray);
	
	$id_usuario = $_COOKIE['usuario'];

	//echo ($nombre . ' ');
	//echo ($app . ' ');
	//print_r($participantes);
	
	try
	{
		$db = new DB_Functions();
		
		// Creación de lo que viene a ser el target
		$db->nuevoTarget($nombre, $app, $id_usuario);
		
		// Ahora hay que recuperar el id del target recientemente creado (al ser autoincrement debería ser el mayor nº)
		$id_target = $db->maxTargetid();
		
		foreach($myArray as $i)
		{
			// Comprobar que el participante existe:
			$id_dest_actual = $db->existeDestinatario($i);
			
			//echo($i);
			
			if ($id_dest_actual != false)
			{
				//echo('<br> verdadero ' . $id_dest_actual); // Si existe cojo su id y lo añadimos a valoraciones
				$db->setValoracionesIni($id_dest_actual, $id_target);
			}
			else
			{
				//echo('<br>  falso');
				// Si no existe, lo creo, cojo su id y lo añadimos a valoraciones
				$db->nuevoDestinatario($i);
				$id_dest_actual = $db->existeDestinatario($i); // ya sabemos que existe porque lo acabo de crear... reciclando y eso...
				$db->setValoracionesIni($id_dest_actual, $id_target);
			}
		}
		
		//echo($id_target);
		
		// ir insertando a todos los participantes en la tabla participantes (si no existen) e ir haciendo entradas
		// en la tabla valoraciones (e ir mandandoles un correo)
		
		
		
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	header("Location: http://localhost/HCXET/Web/start.php"); // Tal vez llevar a una pantalla de agradecimiento... ojalá tuviese tiempo
	die();
?>