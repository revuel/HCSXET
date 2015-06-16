<?php
	
	require_once 'Classes/DB_functions.php';
	$db = new DB_Functions();
	
	$u = $_COOKIE['usuario'];
	
	$alltarget = $db->getAllTargetfromuser($u);
	
	print_r($alltarget);
	
	/*while($row=mysql_fetch_array($result)) 
	{ 
	$title=$row['title']; 
	$url=$row['url']; 

	$posts[] = array('title'=> $title, 'url'=> $url);

	} 

	$response['posts'] = $posts;

	$fp = fopen('results.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);*/
	
	//http://stackoverflow.com/questions/2467945/how-to-generate-json-file-with-php
	//http://stackoverflow.com/questions/17623550/write-data-to-a-json-file-from-php-file
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
		<link rel="stylesheet" href="CSS/bootstrap-table.css">
		
		<style>
			body { padding-top: 95px; }
		</style>
		
		<!-- JAVASCRIPT -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<script src="JavaScript/bootstrap-table.js"></script>
		
	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include 'Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Estado de los estudios en curso</h3>
			<hr><br>
			<div class="container">
				<div class="row">
					<ul class="nav nav-tabs">
						  <li role="presentation" class="active"><a >Estudio 1</a></li>
						  <!--<li role="presentation"><a >...</a></li>
						  <li role="presentation"><a >Estudio n</a></li>-->
						<?php foreach($alltarget as $i):?>
								<li role="presentation"><a ><?=($i[1])?></a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="row">
					<table data-toggle="table" data-url="data1.json" data-height="299" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
						<thead>
						<tr>
							<th data-field="state" data-radio="true">ID</th>
							<th data-field="id" data-align="right">Pregunta 1</th>
							<th data-field="name" data-align="center">...</th>
							<th data-field="name" data-align="center">...</th>
							<th data-field="price" data-align="left">...</th>
						</tr>
						</thead>
					</table>
				</div>
			</div>
		</main>
		
		<!-- Pie de página-->
		<footer>
			<?php include '../Include/pie.php'; ?>
		</footer>
		
		<!-- TokenFields Bootstrap (control)-->
		<script>
			$('#table').bootstrapTable({
				url: 'data.json'
			});
		</script>
	</body>
</html>