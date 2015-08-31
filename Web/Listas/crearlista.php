<?php
	/* -----------------------------------------------------------------------------
		
		Proyecto: Human Centeredness experimental evaluation tool
		Autores: Olga Peñalba, Miguel Revuelta
		Fecha: 2015-09-1
		Versión: 2.0 (español)
		
	----------------------------------------------------------------------------- */
	
	/* 
		Formulario de creación de una lista.
	*/

	// Comprobando autorización
	include '../Session/checksession.php'; // Comprobando autorización
	
	// Importando e instanciando clase consultas
	require_once '../Classes/DB_functions.php';
	$db = new DB_Functions();
	
	// Consultas
	$u = $_COOKIE['usuario'];
	$nomuser = $db->getNombreusuario($u); // Nombre del usuario
?>

<!DOCTYPE html>
<html lang = "es">
	<head>
		<!-- ---------------------------------------------------------------------------
		
		Proyecto: Human Centeredness experimental evaluation tool
		Autores: Olga Peñalba, Miguel Revuelta
		Fecha: 2015-09-1
		Versión: 2.0 (español)

		---------------------------------------------------------------------------- -->
		<title> HCXET | <?=$nomuser?> </title>
		
		<base href="../../">
		 
		<!-- METADATOS -->
		<meta charset="utf-8">
		<meta name="author" content="Olga Peñalba Rodríguez, Miguel Revuelta Espinosa">
		<meta name="description" content="Human Centered Systems Experimental Evaluation Tool">
		<meta name="keywords" content="HCS, HCC, HCD, Human Centered Systems, Sistemas Centrados en la Persona">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS -->
		<link rel="stylesheet" href="CSS/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap-theme.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap-tokenfield.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/hcxet.css" type="text/css" media="screen">
		
		<!-- JAVASCRIPT -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="JavaScript/bootstrap-tokenfield.js"></script>
		<script src="JavaScript/hcxet.js"></script>

	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include '../Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Crear lista</h3>
			<hr>
			<div class = "container">
				<div class="container row">
					<div class="col-xs-12 col-md-4 well">
						<?php include '../Include2/opcioneslista.php'; ?>
					</div>
					<div style="height:340px;" class="col-xs-12 col-sm-6 col-md-8 well" >
						<h4 class = "text-center">Crear una nueva lista de participantes</h4>
						<br><br><br>
						<form class="form-horizontal  pagination-centered" action = "Web/Listas/accion-crearlista.php" method = "post">
							
							<div class="form-group form-group-sm">
								<label class="col-sm-2 control-label" for="formGroupInputSmall">Nombre:</label>
								<div class="col-sm-10">
									<input class="form-control" type = "text" id="formGroupInputSmall" placeholder="Nombre de la lista..." name = "nombrelista" required></input>
								</div>
							</div>
							
							<div class="form-group form-group-sm">
								<label class="col-sm-4 control-label" for="formGroupInputSmall">Participantes de la lista:</label>
							</div>
							
							<!-- Tokenfields -->
							<textarea class="form-control" rows="7" id="tokenfield" placeholder="Añadir participantes..." name = "participantes"required></textarea>
							<br>
							
							<div class = "row text-center">
								<button type="submit" class="btn btn-primary">Nueva lista</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
		
		<!-- Pie de página-->
		<footer>
			<?php include '../Include2/pie2.php'; ?>
		</footer>
		<!-- TokenFields Bootstrap (control)-->
		<script>
			<?php include '../Include2/tkf.php'; ?>
		</script>
	</body>
</html>