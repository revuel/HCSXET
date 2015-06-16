<?php
	
	require_once '../Classes/DB_functions.php';
	$db = new DB_Functions();
	
	$u = $_COOKIE['usuario'];
	
	$nombreslista = $db->listaParcipantesIdusuario($u);
	
	//print_r($nombreslista);
	
?>

<!DOCTYPE html>
<html lang = "es">
	<head>
		<title> HCXET </title>
		
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
		
		<style>
			body { padding-top: 70px; }
		</style>
		


	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include '../Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Página principal de gestión</h3>
			<hr><br>
			<div class = "container">
				<div class="container row">
					<div class="col-xs-6 col-md-4 well">
						<?php include '../Include2/opcioneslista.php'; ?>
					</div>
					<div style="height:340px;" class="col-xs-12 col-sm-6 col-md-8 well " >
						<h4 class = "text-center">Editar una lista</h4><br><br><br>
						<form class="form-horizontal" action = "Web/Listas/accion-agregarunparticipante.php" method= "post">
							<div class="form-group form-group-sm">
								<label class="col-sm-4 control-label" for="formGroupInputSmall">Seleccionar lista:</label>
								<div class = "col-sm-6">
									<select class="form-control" name="lista">
											<?php foreach($nombreslista as $i):?>
												<option value="<?=($i[1])?>"><?=($i[0])?> </td>
											<?php endforeach ?>
									</select>
								</div>
							</div>
							<hr>
							<!--<form class="form-horizontal">-->
							<div class="form-group form-group-sm">
								<label class="col-sm-4 control-label" for="formGroupInputSmall">Añadir participante:</label>
							</div>
							
							<input type="mail" class="form-control" placeholder="Introduzca la dirección de correo del participante" name = "email" required></input>
							
							<br>
							<div class = "row text-center">
								<button type="submit" class="btn btn-primary">Agregar</button>
							</div>
						</form>
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