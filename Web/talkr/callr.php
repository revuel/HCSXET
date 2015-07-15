<?php
	
	require_once '../Classes/DB_functions.php';
	$db = new DB_Functions();
	
	$u = $_COOKIE['usuario'];
	$t = $_POST['target'];
	
	/*echo ('Id usuario: '. $u .' ');
	echo ('Id target: '. $t .' ');*/
	
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
	//exec("R CMD BATCH prueba.R $test");
	//print_r($resultado);
	/*echo("<img src='mf.png' ></img>");
	echo("<img src='hg.png' ></img>");
	echo("<img src='input1.png' ></img>");
	echo("<img src='input2.png' ></img>");
	echo("<img src='output.png' ></img>");
	echo("<img src='resultado.png' ></img>");*/
?>

<html lang = "es">
	<head>
		<title> HCXET </title>
		
		<base href="../">
		 
		<!-- METADATOS -->
		<meta charset="utf-8">
		<meta name="author" content="Olga Peñalba Rodríguez, Miguel Revuelta Espinosa">
		<meta name="description" content="Human Centered Systems Experimental Evaluation Tool">
		<meta name="keywords" content="HCS, HCC, HCD, Human Centered Systems, Sistemas Centrados en la Persona">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS -->
		<link rel="stylesheet" href="../CSS/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../CSS/bootstrap-theme.css" type="text/css" media="screen">
		<link rel="stylesheet" href="../CSS/bootstrap-table.css">
		
		<style>
			body { padding-top: 95px; }
		</style>
		
		<!-- JAVASCRIPT -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
	</head>
	
		<body>
		<!-- Cabecera -->
		<header>
			<?php include '../Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<div class="container  text-center">
				<div class="row">
					<h1>Resultados del Estudio</h1>
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de salida</p>
						<img class = "img-responsive center-block" src='talkr/mf.png' alt="Explicación de la HCXET">
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Resultado</p>
						<img class = "img-responsive center-block" src='talkr/hg.png' alt="Explicación de la HCXET">
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de entrada 1</p>
						<img class = "img-responsive center-block" src='talkr/input1.png' alt="Explicación de la HCXET">
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de entrada 2</p>
						<img class = "img-responsive center-block" src='talkr/input2.png' alt="Explicación de la HCXET">
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de salida</p>
						<img class = "img-responsive center-block" src='talkr/output.png' alt="Explicación de la HCXET">
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Resultado</p>
						<img class = "img-responsive center-block" src='talkr/resultado.png' alt="Explicación de la HCXET">
					</div>
				</div>
				
				
			</div>
		</main>
		
		<!-- Pie de página-->
		<footer>
			<?php include '../../Include/pie.php'; ?>
		</footer>
	</body>
</html>
