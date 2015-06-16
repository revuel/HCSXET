<?php

	//$id_destinatario = $_POST['id_destinatario'];
	//$id_target = $_POST['id_target'];
	
	$id_destinatario = $_COOKIE['destinatario'];
	$id_target = $_COOKIE['target'];
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
		
		<!--<style>
			body { padding-top: 90px; }
			#conectar {padding:150px;}
		</style>-->
		
		<!-- JAVASCRIPT -->
	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php //include '../Include/cabecera1.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<div class = "container ">
			<h2 class ="text-center">Nombre del estudio</h2>
			<hr>
				<form action="Estudio/accion-resultados.php" method = "POST">
				
				<input type = "hidden" name = "destinatario" value = "<?=$id_destinatario ?>"></input>
				<input type = "hidden" name = "target" value = "<?=$id_target ?>"></input>
				
					<div class ="row well">
						<h3 class ="text-center">Grupo de preguntas 1</h3>
						<div class = "col-xs-12 col-sm-4 col-md-4">	
						<h4 class ="text-center">¿El sistema potencia sus capacidades?</h4>
							<div class="radio">
								<label><input type="radio" name="optradio1" value="1">Si, potencia mis capacidades</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio1" value="2">Me es indiferente.</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio1" value="3">No potencia mis capacidades</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Tiene usted la oportunidad de elegir qué tareas realizar usted mismo y qué tareas delegar para que sean realizadas automáticamente por el sistema?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio2" value="1">Si, puedo configurar el sistema para decidir qué hacer yo manualmente y qué tareas automatizar</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio2" value="2">Irrelevante</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio2" value="3">No tengo opción a tomar este tipo de decisiones</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Considera que el sistema es apropiado para entorno donde se ubica?</h4>
							
							<div class="radio">
								<label><input type="radio" name="optradio3" value="1">Si, el sistema encaja a la perfección en el entorno de utilización</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio3" value="2">El sistema no supone nada en particular</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio3" value="3">El sistema es complétamente anacrónico y no tiene sentido su presencia en este entorno</label>
							</div>
						</div>
						
					</div>
					<br>	
					<div class ="row well">
						<h3 class ="text-center">Grupo de preguntas 2</h3>
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Considera al sistema como algo que le ha sido impuesto?</h4>
								<div class="radio">
								<label><input type="radio" name="optradio4" value="1">No, yo soy quien elige cada día utilizar este sistema y no otras opciones</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio4" value="2">El sistema no me incomoda pero tampoco me entusiasma</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio4" value="3">Si, de hecho, me apaño mejor con otras herramientas</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Le ha supuesto un esfuerzo adaptarse al sistema?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio5" value="1">No, pude explotar sus funcionalidades sin esfuerzo desde el principio</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio5" value="2">No me costó esfuerzo adaptarme, pero tuve que hacerlo</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio5" value="3">Si, de hecho no siento haber llegado a dominarlo</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿El sistema contribuye a realizar actividades propias del entorno eficientemente?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio6" value="1">Si, el sistema aporta comodidad para realizar actividades</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio6" value="2">Se realizan actividades mediante el sistema, pero no hay otra alternativa</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio6" value="3">El sistema nos obliga a usar paliativos y/o buscar alternativas a él para poder terminar actividades</label>
							</div>
						</div>
						
					</div>
					<br>	
					<div class ="row well">
						<h3 class ="text-center">Grupo de preguntas 3</h3>
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿La distribución visual de la información es la adecuada?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio7" value="1">Si,puedo utilizar los distintos componentes con fluidez y eficacia</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio7" value="2">Todavía hay algunos componentes a los que me cuesta acceder</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio7" value="3">Si pudiera, cambiaría la mayor parte de los elementos de ubicación</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Considera que el sistema le ofrece información en exceso o en defecto?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio8" value="1">No, la información es la que necesito en todo momento</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio8" value="2">A veces sobra, a veces falta</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio8" value="3">Casi nunca veo todo lo que necesito al mismo tiempo con comodidad</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Tiene la posibilidad de adaptar la forma en que el sistema provee información a sus necesidades?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio9" value="1">Si, tanto en formato como en ubicación</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio9" value="2">Puedo configurar algunos elementos</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio9" value="3">No, el sistema dispone la información siempre de forma estática</label>
							</div>
							
						</div>
					</div>
					<br>	
					<div class ="row well">
						<h3 class ="text-center">Grupo de preguntas 4</h3>
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿El sistema contribuye a que usted sea más experto en su profesión?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio10" value="1">Si, siento que he avanzado en mis conocimientos desde que uso el sistema</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio10" value="2">No he notado un avance estraordinario en mis conocimientos</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio10" value="3">No, definitivamente el sistema no me aporta dominar más los conocimientos de mi profesión</label>
							</div>
							<br>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿El sistema proporciona medios para capturar conocimientos y destrezas sobre las actividades que se desempeñan a través del mismo?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio11" value="1">Si, las soluciones innovadoras quedan capturadas por el sistema</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio11" value="2">Algunas soluciones quedan recogidas</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio11" value="3">No, la salvaguarda del conocimiento es ajena a la herramienta</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿El sistema facilita a los participantes compartir sus conocimientos?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio12" value="1">Si, de hecho es el principal medio para compartir conocimiento</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio12" value="2">No es que lo impida, pero es preferible usar otros medios</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio12" value="3">Esta funcionalidad es ajena a la herramienta</label>
							</div>
						</div>
						
					</div>
					<br>	
					<div class ="row well">
						<h3 class ="text-center">Grupo de preguntas 5</h3>
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿El sistema es coherente con sus valores?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio13" value="1">Si, el sistema no es contrario a ninguno de mis valores</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio13" value="2">No me incomoda especialmente aquellos valores que parecen estar ausentes en el sistema</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio13" value="3">El sistema no refleja mis valores, no me identifico con él</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Considera que el sistema logra consensuar los conflictos de valores de los beneficiarios?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio14" value="1">Si, todos parecen satisfechos en este sentido</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio14" value="2">No se percibe un consenso, pero sigue sin suponer un conflicto</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio14" value="3">Existe un conflicto respecto a esta cuestión que el sistema agrava</label>
							</div>
						</div>
							
						<div class = "col-xs-12 col-sm-4 col-md-4">
							<h4 class ="text-center">¿Facilita el sistema el incumplimiento de alguno de los derechos humanos o facilita amenazar la dignidad de alguna persona o conjunto de personas?</h4>
							
								<div class="radio">
								<label><input type="radio" name="optradio15" value="1">Todo lo contrario, el sistema fue concebido con la preocupación de defender la Dignidad Ontológica</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio15" value="2">Podría llegar a usarse para tal fin, pero el sistema no ofrece facilidades para ello</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio15" value="3">Existe una gran preocupación porque el sistema puede usarse para tal fin con cierta facilidad</label>
							</div>
						</div>
						
					</div>
					<br>	
					<div class ="row">
						<div class = "col-md-2 col-md-offset-5">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
						</div>
					</div>
				</form>
				<br>
			</div>
		</main>
		<!-- Pie de página-->
		<footer>
		</footer>
	</body>
</html>