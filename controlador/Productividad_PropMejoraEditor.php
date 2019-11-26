<?php 
	require_once '../modelo/Productividad_PropMejora.php';
	require_once '../modelo/Productividad_DetallePropMejora.php';
	$IdPropMejora = $_POST['IdPropMejora'];
	$Titulo = $_POST['Titulo'];
	$Detalle = $_POST['Detalle'];

	$Fecha = new DateTime();
	$Fecha->modify('-6 hours');

	if($IdPropMejora == "-1")
		$IdPropMejora = PropMejora::agregar($Fecha)->IdPropMejora;
	DetallePropMejora::agregar($IdPropMejora,$Titulo,$Detalle,$Fecha);
	echo '<script> window.location.replace("../vista/Productividad_PropMejoraMain.php") </script>';
 ?>