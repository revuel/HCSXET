<?php

	require_once '../Web/Classes/DB_functions.php';
	
	$destinatario = $_POST['destinatario'];
	$target = $_POST['target'];
	//$token = $_POST['token'];
	$op1 = $_POST['optradio1'];
	$op2 = $_POST['optradio2'];
	$op3 = $_POST['optradio3'];
	$op4 = $_POST['optradio4'];
	$op5 = $_POST['optradio5'];
	$op6 = $_POST['optradio6'];
	$op7 = $_POST['optradio7'];
	$op8 = $_POST['optradio8'];
	$op9 = $_POST['optradio9'];
	$op10 = $_POST['optradio10'];
	$op11 = $_POST['optradio11'];
	$op12 = $_POST['optradio12'];
	$op13 = $_POST['optradio13'];
	$op14 = $_POST['optradio14'];
	$op15 = $_POST['optradio15'];
	
	//echo($destinatario .' '.  $target .' '. $op1 .' '. $op2 .' '. $op3 .' '. $op4 .' '. $op5 .' '. $op6 .' '. $op7 .' '. $op8 .' '. $op9 .' '. $op10 .' '. $op11 .' '. $op12 .' '. $op13 .' '. $op14 .' '. $op15);
	
	try
	{
		$db = new DB_Functions();
		// Seleccionar id_target e id_destinatario segun los nombres de target y de destinatario de la BD
		/*$destinatario = $db->getIddestinatario($destinatario);
			
		$target = $db->getIdtarget($target);*/
		
		// Actualizar campos
		$db->setResultados($destinatario, $target, $op1, $op2, $op3, $op4, $op5, $op6, $op7, $op8, $op9, $op10, $op11, $op12, $op13, $op14, $op15);
		
		// Remover cookies auxiliares
		if (isset($_COOKIE['destinatario'])) 
		{
			unset($_COOKIE['destinatario']);
			unset($_COOKIE['target']);
			setcookie('destinatario', null, -1, '/');
			setcookie('target', null, -1, '/');
			//return true;
		}
		else 
		{
			//return false;
		}
	}	
	catch(PDOException $e)
	{
		echo("Error: " + $e);
	}
	
	header("Location: http://localhost/HCXET/"); // Tal vez llevar a una pantalla de agradecimiento
	die();
?>
