<?php 
	require_once '../modelo/Productividad_TecnicaProduccion.php';
	require_once '../modelo/Productividad_DetalleTecnicaProduccion.php';
	$IdTecnica = $_POST['IdTecnica'];
	$Titulo = $_POST['Titulo'];
	$Detalle = $_POST['Detalle'];

	$Fecha = new DateTime();
	$Fecha->modify('-6 hours');

	if($IdTecnica == "-1")
		$IdTecnica = TecnicaProduccion::agregar($Fecha)->IdTecnica;
	DetalleTecnicaProduccion::agregar($IdTecnica,$Titulo,$Detalle,$Fecha);
	echo '<script> window.location.replace("../vista/Productividad_TecProduccionMain.php") </script>';
 ?>