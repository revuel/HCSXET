/* -----------------------------------------------------------------------------
	
	Proyecto: Human Centeredness experimental evaluation tool
	Autores: Olga Peñalba, Miguel Revuelta
	Fecha: 2015-09-1
	Versión: 2.0 (español)
	
----------------------------------------------------------------------------- */

$(document).ready(function(){
    
	// Ir a la página inical 
	$('#ini').click(function(){
		window.location.href = "/HCXET/Web/start.php";
	});
	
	// Ir a nuevo estudio
	$('#nue').click(function(){
		window.location.href = "/HCXET/Web/nuevotarget.php";
	});
	
	// Ir a estado de estudios
	$('#est').click(function(){
		window.location.href = "/HCXET/Web/cursotarget.php";
	});
	
	// Ir a gestión de listas
	$('#lis').click(function(){
		window.location.href = "/HCXET/Web/Listas/listas.php";
	});
	
	// Ir a resultados 
	$('#res').click(function(){
		window.location.href = "/HCXET/Web/misresultados.php";
	});
	
	// Cerrar sesión
	$('#clo').click(function(){
		window.location.href = "/HCXET/Login/logout.php";
	});
});