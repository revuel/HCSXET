<?php
	
	require_once 'Classes/DB_functions.php';
	$db = new DB_Functions();
	
	$u = $_COOKIE['usuario'];
	
	if (isset($_GET['id_target']))
	{
		$id_target = $_GET['id_target']; // asignación estándar
	}
	else
	{
		$id_target = 1; // casos en los que se acceda a la página con la variable sin establecer
	}
	
	$targets = $db->getAllTargetfromuser($u);
	
?>

<!DOCTYPE html>
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
		<link rel="stylesheet" href="CSS/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap-theme.css" type="text/css" media="screen">
		
		<style>
			body { padding-top: 95px; }
			#kludge { padding:150px;}
		</style>
		
		<!-- JAVASCRIPT -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="JavaScript/bootstrap.js"></script>
		
		<script type="text/javascript">
			$(function()
			{
			  $("#sel").change(function()
			  {
				window.location='Web/misresultados.php?id_target=' + this.value
			  });
			});
		</script>
	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include 'Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Comprobar resultados de un estudio</h3>
			<hr><br>
			<div class="container well text-center" id="kludge">
				<div class="row">
					<form class="form-horizontal" action="Web/talkr/callr.php" method="post">
						<div class="form-group form-group-sm">
							<label class="col-sm-4 control-label" for="formGroupInputSmall">Seleccionar estudio:</label>
							<div class = "col-sm-6">
								<select class="form-control" id="sel" name="target">
									<?php foreach($targets as $i):?>
										<option <?php if($i['id_target'] == $id_target):?> selected <?php endif?> value = '<?=$i['id_target']?>'>
											<?=($i['nombre_target'])?>
										</td>
									<?php endforeach ?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Comprobar</button>
						</div>
					</form>
				</div>
				<!--<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de entrada 1</p>
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de entrada 2</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de salida</p>
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Resultado</p>
					</div>
				</div>
			</div>-->
		</main>
		
		<!-- Pie de página-->
		<footer>
			<?php include '../Include/pie.php'; ?>
		</footer>
	</body>
</html>