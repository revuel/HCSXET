<?php
	
	/* -----------------------------------------------------------------------------
		
		Proyecto: Human Centeredness experimental evaluation tool
		Autores: Olga Peñalba, Miguel Revuelta
		Fecha: 2015-09-1
		Versión: 2.0 (español)
		
	----------------------------------------------------------------------------- */
	
	/* 
		Esta página ofrece un formulario dinámico con jquery donde elegir respuestas 
		a preguntas sobre los principios de la Computación Centrada en la Persona y
		los envía a otro script para ser procesadas.
	*/
	
	// Comprobando que haya sido superado el acceso como participante
	if (!isset($_COOKIE['destinatario']) || !isset($_COOKIE['target'])) {
		header("Location: http://localhost/HCXET/Estudio/formestudio.php"); 
		die();
	}
	
	// Importando clase de consultas
	require_once '../Web/Classes/DB_functions.php';
	
	// Captura de datos
	$id_destinatario = $_COOKIE['destinatario'];
	$id_target = $_COOKIE['target'];
	
	// Instancia de objeto consultas
	$db = new DB_Functions();
	
	// Nombre del estudio actual
	$study = $db->getNombreestudio($id_target);
	$sistema = $db->getNombresistema($id_target);
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
		<title> HCXET | Estudio </title>
		
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
		<link rel="stylesheet" href="CSS/hcxet.css" type="text/css" media="screen">
		
		<style>
			.botones{font-size: 50px; margin-top:40px;}
			.botones:hover{cursor:pointer; text-shadow: 4px 4px 2px rgba(150, 150, 150, 1);}
			.fr{float: right;}
			.abs{ padding:25px;}
		</style>
		
		<!-- JAVASCRIPT -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			
				// Inicialización de la visibilidad de los elementos
				$(b1).show();
				$(q1).show();
				$(leftarrow).hide();
				$(lcross).show();
				
				// Variable de control
				var pos = 1;
			
				// Ir hacia la izquierda (pregunta anterior)
				$(".l1").click(function(){
		
					if (pos > 1){
						pos = pos -1;

						switch(pos) {
							case 1:
								$(q2).hide();
								$(q1).show();
								$(leftarrow).hide();
								$(lcross).show();
								break;
							case 2:
								$(q3).hide();
								$(q2).show();
								break;
							case 3:
								$(b2).hide();
								$(b1).show();
								$(q4).hide();
								$(q3).show();
								break;
							case 4:
								$(q5).hide();
								$(q4).show();
								break;
							case 5:
								$(q6).hide();
								$(q5).show();
								break;
							case 6:
								$(b3).hide();
								$(b2).show();
								$(q7).hide();
								$(q6).show();
								break;
							case 7:
								$(q8).hide();
								$(q7).show();
								break;
							case 8:
								$(q9).hide();
								$(q8).show();
								break;
							case 9:
								$(b4).hide();
								$(b3).show();
								$(q10).hide();
								$(q9).show();
								break;
							case 10:
								$(q11).hide();
								$(q10).show();
								break;
							case 11:
								$(q12).hide();
								$(q11).show();
								break;
							case 12:
								$(b5).hide();
								$(b4).show();
								$(q13).hide();
								$(q12).show();
								break;
							case 13:
								$(q14).hide();
								$(q13).show();
								break;
							case 14:
								$(q15).hide();
								$(q14).show();
								break;
							case 15:
								$(b6).hide();
								$(b5).show();
								$(q15).show();
								break;
							default:
								alert("Error");
						} 
					}
				});
				
				// Ir hacia la derecha (pregunta posterior)
				$(".r1").click(function(){
					
					if (pos < 16){
						pos = pos + 1;
						
						switch(pos) {
							case 2:
								$(q1).hide();
								$(q2).show();
								$(lcross).hide();
								$(leftarrow).show();
								break;
							case 3:
								$(q2).hide();
								$(q3).show();
								break;
							case 4:
								$(b1).hide();
								$(b2).show();
								$(q3).hide();
								$(q4).show();
								break;
							case 5:
								$(q4).hide();
								$(q5).show();
								break;
							case 6:
								$(q5).hide();
								$(q6).show();
								break;
							case 7:
								$(b2).hide();
								$(b3).show();
								$(q6).hide();
								$(q7).show();
								break;
							case 8:
								$(q7).hide();
								$(q8).show();
								break;
							case 9:
								$(q8).hide();
								$(q9).show();
								break;
							case 10:
								$(b3).hide();
								$(b4).show();
								$(q9).hide();
								$(q10).show();
								break;
							case 11:
								$(q10).hide();
								$(q11).show();
								break;
							case 12:
								$(q11).hide();
								$(q12).show();
								break;
							case 13:
								$(b4).hide();
								$(b5).show();
								$(q12).hide();
								$(q13).show();
								break;
							case 14:
								$(q13).hide();
								$(q14).show();
								break;
							case 15:
								$(q14).hide();
								$(q15).show();
								break;
							case 16:
								$(b6).show();
								$(b5).hide();
								$(q15).hide();
								break;
							default:
								alert("Error");
						}
					}
				});
			}); 
		</script>
	</head>
	
	<body>
		<!-- Contenido principal -->
		<main>
			<div class = "container">
			<h2 class ="text-center">Bienvenido al estudio <?=$study?></h2>
			<h3 class ="text-center">Puntuando el sistema: <?=$sistema?></h2>
			<hr>
				<form action="Estudio/accion-resultados.php" method = "POST" class="abs">
				
					<input type = "hidden" name = "destinatario" value = "<?=$id_destinatario ?>"></input>
					<input type = "hidden" name = "target" value = "<?=$id_target ?>"></input>
				
					<!-- BLOQUE DE PREGUNTAS  1 --> 
					<div class ="row well encuestapanel" id = "b1" hidden="false">
						<h3 class ="text-center">Grupo de preguntas 1</h3><hr>
						
						<div class = "col-xs-12 col-sm-2 col-md-2">
							<span id = "leftarrow" class="glyphicon glyphicon-chevron-left botones l1" aria-hidden="true"></span>
							<span id = "lcross" class="glyphicon glyphicon-remove botones disabled" disabled ></span>
						</div>
						
						<div class = "col-xs-12 col-sm-8 col-md-8" id="q1" hidden="false">
							<h4 class ="text-center">#1- ¿El sistema potencia sus capacidades?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
									<div class="radio">
									<label><input type="radio" name="optradio1" value="3" required>Si, potencia mis capacidades</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio1" value="2">Me es indiferente.</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio1" value="1">No potencia mis capacidades</label>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class = "col-xs-12 col-sm-8 col-md-8" id="q2" hidden="true">
							<h4 class ="text-center">#2- ¿Tiene usted la oportunidad de elegir qué tareas realizar usted mismo y qué tareas delegar para que sean realizadas automáticamente por el sistema?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
									<div class="radio">
										<label><input type="radio" name="optradio2" value="3" required>Si, puedo configurar el sistema para decidir qué hacer yo manualmente y qué tareas automatizar</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio2" value="2">Irrelevante</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio2" value="1">No tengo opción a tomar este tipo de decisiones</label>
									</div>
								</div>
							</div>
							
						</div>
							
						<div class = "col-xs-12 col-sm-8 col-md-8" id="q3" hidden="true">
							<h4 class ="text-center">#3- ¿Considera que el sistema es apropiado para entorno donde se ubica?</h4>
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
									<div class="radio">
										<label><input type="radio" name="optradio3" value="3" required>Si, el sistema encaja a la perfección en el entorno de utilización</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio3" value="2">El sistema no supone nada en particular</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio3" value="1">El sistema es complétamente anacrónico y no tiene sentido su presencia en este entorno</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class = "col-xs-12 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-right botones fr r1" ></span>
						</div>
					</div>
					
					<!-- BLOQUE DE PREGUNTAS 2 --> 					
					<div class ="row well encuestapanel" id = "b2" hidden="true">
						<h3 class ="text-center">Grupo de preguntas 2</h3><hr>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-left botones l1" aria-hidden="true"></span>
						</div>
						
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q4" hidden="true">
							<h4 class ="text-center">#4- ¿Considera al sistema como algo que le ha sido impuesto?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
									<div class="radio">
										<label><input type="radio" name="optradio4" value="3" required>No, yo soy quien elige cada día utilizar este sistema y no otras opciones</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio4" value="2">El sistema no me incomoda pero tampoco me entusiasma</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio4" value="1">Si, de hecho, me apaño mejor con otras herramientas</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q5" hidden="true">
							<h4 class ="text-center">#5- ¿Le ha supuesto un esfuerzo adaptarse al sistema?</h4>
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
									<div class="radio">
										<label><input type="radio" name="optradio5" value="3" required>No, pude explotar sus funcionalidades sin esfuerzo desde el principio</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio5" value="2">No me costó esfuerzo adaptarme, pero tuve que hacerlo</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio5" value="1">Si, de hecho no siento haber llegado a dominarlo</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q6" hidden="true">
							<h4 class ="text-center">#6- ¿El sistema contribuye a realizar actividades propias del entorno eficientemente?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">									
									<div class="radio">
										<label><input type="radio" name="optradio6" value="3" required>Si, el sistema aporta comodidad para realizar actividades</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio6" value="2">Se realizan actividades mediante el sistema, pero no hay otra alternativa</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio6" value="1">El sistema nos obliga a usar paliativos y/o buscar alternativas a él para poder terminar actividades</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-right botones fr r1" ></span>
						</div>
						
					</div>

					<!-- BLOQUE DE PREGUNTAS  3 --> 
					<div class ="row well encuestapanel" id = "b3" hidden="true">
						<h3 class ="text-center">Grupo de preguntas 3</h3><hr>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-left botones l1" aria-hidden="true"></span>
						</div>
						
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q7" hidden="true">
							<h4 class ="text-center">#7- ¿La distribución visual de la información es la adecuada?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio7" value="3" required>Si,puedo utilizar los distintos componentes con fluidez y eficacia</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio7" value="2">Todavía hay algunos componentes a los que me cuesta acceder</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio7" value="1">Si pudiera, cambiaría la mayor parte de los elementos de ubicación</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q8" hidden="true">
							<h4 class ="text-center">#8- ¿Considera que el sistema le ofrece información en exceso o en defecto?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio8" value="3" required>No, la información es la que necesito en todo momento</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio8" value="2">A veces sobra, a veces falta</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio8" value="1">Casi nunca veo todo lo que necesito al mismo tiempo con comodidad</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q9" hidden="true">
							<h4 class ="text-center">#9- ¿Tiene la posibilidad de adaptar la forma en que el sistema provee información a sus necesidades?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio9" value="3" required>Si, tanto en formato como en ubicación</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio9" value="2">Puedo configurar algunos elementos</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio9" value="1">No, el sistema dispone la información siempre de forma estática</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-right botones fr r1" ></span>
						</div>
						
					</div>
										
					<!-- BLOQUE DE PREGUNTAS  4--> 
					<div class ="row well encuestapanel" id = "b4" hidden="true">
						<h3 class ="text-center">Grupo de preguntas 4</h3><hr>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-left botones l1" aria-hidden="true"></span>
						</div>
						
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q10" hidden="true">
							<h4 class ="text-center">#10- ¿El sistema contribuye a que usted sea más experto en su profesión?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio10" value="3" required>Si, siento que he avanzado en mis conocimientos desde que uso el sistema</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio10" value="2">No he notado un avance estraordinario en mis conocimientos</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio10" value="1">No, definitivamente el sistema no me aporta dominar más los conocimientos de mi profesión</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q11" hidden="true">
							<h4 class ="text-center">#11- ¿El sistema proporciona medios para capturar conocimientos y destrezas sobre las actividades que se desempeñan a través del mismo?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio11" value="3" required>Si, las soluciones innovadoras quedan capturadas por el sistema</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio11" value="2">Algunas soluciones quedan recogidas</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio11" value="1">No, la salvaguarda del conocimiento es ajena a la herramienta</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q12" hidden="true">
							<h4 class ="text-center">#12- ¿El sistema facilita a los participantes compartir sus conocimientos?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">		
									<div class="radio">
										<label><input type="radio" name="optradio12" value="3" required>Si, de hecho es el principal medio para compartir conocimiento</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio12" value="2">No es que lo impida, pero es preferible usar otros medios</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio12" value="1">Esta funcionalidad es ajena a la herramienta</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-right botones fr r1" ></span>
						</div>
						
					</div>
										
					<!-- BLOQUE DE PREGUNTAS 5 --> 
					<div class ="row well encuestapanel" id = "b5" hidden="true">
						<h3 class ="text-center">Grupo de preguntas 5</h3><hr>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-left botones l1" aria-hidden="true"></span>
						</div>
						
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q13" hidden="true">
							<h4 class ="text-center">#13- ¿El sistema es coherente con sus valores?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio13" value="3" required>Si, el sistema no es contrario a ninguno de mis valores</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio13" value="2">No me incomoda especialmente aquellos valores que parecen estar ausentes en el sistema</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio13" value="1">El sistema no refleja mis valores, no me identifico con él</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q14" hidden="true">
							<h4 class ="text-center">#14- ¿Considera que el sistema logra consensuar los conflictos de valores de los beneficiarios?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3" >		
									<div class="radio">
										<label><input type="radio" name="optradio14" value="3" required>Si, todos parecen satisfechos en este sentido</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio14" value="2">No se percibe un consenso, pero sigue sin suponer un conflicto</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio14" value="1">Existe un conflicto respecto a esta cuestión que el sistema agrava</label>
									</div>
								</div>
							</div>
						</div>
							
						<div class = "col-xs-8 col-sm-8 col-md-8" id="q15" hidden="true">
							<h4 class ="text-center">#15- ¿Facilita el sistema el incumplimiento de alguno de los derechos humanos o facilita amenazar la dignidad de alguna persona o conjunto de personas?</h4>
							
							<div class = "row">
								<div class = "col-xs-12 col-sm-8 col-md-6 col-md-offset-3">		
									<div class="radio">
										<label><input type="radio" name="optradio15" value="3" required>Todo lo contrario, el sistema fue concebido con la preocupación de defender la Dignidad Ontológica</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio15" value="2">Podría llegar a usarse para tal fin, pero el sistema no ofrece facilidades para ello</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="optradio15" value="1">Existe una gran preocupación porque el sistema puede usarse para tal fin con cierta facilidad</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-right botones fr r1" ></span>
						</div>
						
					</div>
					
					<!-- BOTON ENVIAR  --> 
					<div class ="row well" id = "b6" hidden="true">
						
						<h3 class ="text-center">Enviar resultados</h3><hr>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span class="glyphicon glyphicon-chevron-left botones l1" aria-hidden="true"></span>
						</div>
					
						<div class = "col-xs-8 col-sm-8 col-md-8 text-center">
							<p>Gracias por su colaboración, pulse para terminar</p>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
						</div>
						
						<div class = "col-xs-2 col-sm-2 col-md-2">
							<span id = "rightcross" class="glyphicon glyphicon-remove botones disabled fr" disabled></span>
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