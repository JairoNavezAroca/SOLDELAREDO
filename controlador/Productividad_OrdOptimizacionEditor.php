<?php 
	require_once '../modelo/Productividad_PropMejora.php';
	require_once '../modelo/Productividad_DetallePropMejora.php';
	require_once '../modelo/Productividad_OrdenOptimizacion.php';
	require_once '../modelo/Productividad_DetalleOrdenOptimizacion.php';
	$IdOrdenOptimizacion = $_POST['IdOrdenOptimizacion'];
	$IdPropMejora = $_POST['IdPropMejora'];
	$Respuesta = $_POST['Respuesta'];
	$FechaRealizar = $_POST['FechaRealizar'];
	$Detalle = $_POST['Detalle'];

	$Fecha = new DateTime();
	$Fecha->modify('-6 hours');

	if($IdOrdenOptimizacion == "-1")
		$IdOrdenOptimizacion = OrdenOptimizacion::agregar($Fecha,$IdPropMejora)->IdOrdenOptimizacion;
	DetalleOrdenOptimizacion::agregar($IdOrdenOptimizacion,$Respuesta,$FechaRealizar,$Detalle,$Fecha);
	echo '<script> window.location.replace("../vista/Productividad_OrdOptimizacionMain.php") </script>';
 ?>