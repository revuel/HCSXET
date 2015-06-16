<?php
	
	require_once '../Classes/DB_functions.php';
	$db = new DB_Functions();
	
	$u = $_COOKIE['usuario'];
	
	$nombreslista = $db->listaParcipantesIdusuario($u);
	
	//print_r($nombreslista);
	
	// Has de recoger el id_lista del nombre_lista que hay en el select pillado.
	// Pásalo como valor ahí abajo.
	
	$nombresparticipantes = $db->listaNombresparticipantelista(1);
	print_r($nombresparticipantes);
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
		
		<style>
			body { padding-top: 70px; }
			
		</style>
		
		<!-- JAVASCRIPT -->

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
					<div class="col-xs-12 col-sm-6 col-md-8 well" style="max-height:340px;overflow-y: scroll;">
						<h4 class = "text-center">Visualizando listas</h4><br>
					
						<div class="form-group form-group-sm">
							<label class="col-sm-4 control-label" for="formGroupInputSmall">Seleccionar lista:</label>
							<div class = "col-sm-6">
								<select class="form-control">
								<?php foreach($nombreslista as $i):?>
									<option><?=($i[0])?></td>
								<?php endforeach ?>
								</select>
							</div>
						</div>
						<hr>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Dirección</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>22</td>
									<td>Revuel@mymail.com</td>
								</tr>
								<tr>
									<td>101</td>
									<td>other@mymail.com</td>
								</tr>
								<tr>
									<td>1001</td>
									<td>another@mymail.com</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Revuel@mymail.com</td>
								</tr>
								<tr>
									<td>101</td>
									<td>other@mymail.com</td>
								</tr>
								<tr>
									<td>1001</td>
									<td>another@mymail.com</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Revuel@mymail.com</td>
								</tr>
								<tr>
									<td>101</td>
									<td>other@mymail.com</td>
								</tr>
								<tr>
									<td>1001</td>
									<td>another@mymail.com</td>
								</tr>
								<tr>
									<td>22</td>
									<td>Revuel@mymail.com</td>
								</tr>
								<tr>
									<td>101</td>
									<td>other@mymail.com</td>
								</tr>
								<tr>
									<td>1001</td>
									<td>another@mymail.com</td>
								</tr>
								
							</tbody>
						</table>
						<br>
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