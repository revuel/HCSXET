<?php
	
	require_once '../Classes/DB_functions.php';
	$db = new DB_Functions();
	
	$u = $_COOKIE['usuario'];
	$t = $_POST['target'];
	
	echo ('Id usuario: '. $u .' ');
	echo ('Id target: '. $t .' ');
	
	$resultado = $db->mediasRespuesta($t);
	//echo ($resultado[0][0]);
	
	$test = $resultado[0][0] . ' ' .  $resultado[0][1] . ' ' . $resultado[0][2] . ' ' . $resultado[0][3] . ' ' . $resultado[0][4] . ' ' . $resultado[0][5]. ' ' . $resultado[0][6] . ' ' . $resultado[0][7] . ' ' . $resultado[0][8] . ' ' . $resultado[0][9] . ' ' . $resultado[0][10] . ' ' . $resultado[0][11] . ' ' . $resultado[0][12] . ' ' . $resultado[0][13] . ' ' . $resultado[0][14]; 
	//print_r($test);
	
	//$arr = array($resultado[0],$resultado[1]);
	//echo implode(" ",$test);
	
	//$test = "9 4 3 5 2 1 2 4 5 9 7 2 3 8 7";
	
	//$arr = array('Hello','World!','Beautiful','Day!');
	//echo implode(" ",$arr);
	
	exec("Rscript prueba.R $test");
	//print_r($resultado);
	
	echo("<img src='mf.png' ></img>");
	echo("<img src='hg.png' ></img>");
	echo("<img src='input1.png' ></img>");
	echo("<img src='input2.png' ></img>");
	echo("<img src='output.png' ></img>");
	echo("<img src='resultado.png' ></img>");
?>