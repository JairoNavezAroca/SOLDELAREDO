<?php 
	session_start();
	require_once '../modelo/Productividad_PropMejora.php';
	require_once '../modelo/Productividad_DetallePropMejora.php';
	require_once '../modelo/Productividad_OrdenOptimizacion.php';
	require_once '../modelo/Productividad_DetalleOrdenOptimizacion.php';
	$IdOrdenOptimizacion = $_POST['IdOrdenOptimizacion'];
	$IdPropMejora = $_POST['IdPropMejora'];
	$Respuesta = $_POST['Respuesta'];
	$FechaRealizar = $_POST['FechaRealizar'];
	$Detalle = $_POST['Detalle'];

	if (!esValido($Detalle,10)){
		$_SESSION['error'] = "Detalle invalido, intente nuevamente";
		echo '<script> window.location.replace("../vista/Productividad_OrdOptimizacionEditor.php") </script>';
		return;
	}
/*
return $FechaRealizar.'sss';
$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
$fecha_entrada = strtotime("19-11-2008 21:00:00");
	
if($fecha_actual > $fecha_entrada)
	{
	echo "La fecha actual es mayor a la comparada.";
	}else
		{
		echo "La fecha comparada es igual o menor";
		}
*/

	$Fecha = new DateTime();
	$Fecha->modify('-6 hours');

	if($IdOrdenOptimizacion == "-1")
		$IdOrdenOptimizacion = OrdenOptimizacion::agregar($Fecha,$IdPropMejora)->IdOrdenOptimizacion;
	DetalleOrdenOptimizacion::agregar($IdOrdenOptimizacion,$Respuesta,$FechaRealizar,$Detalle,$Fecha);
	echo '<script> window.location.replace("../vista/Productividad_OrdOptimizacionMain.php") </script>';
 ?>