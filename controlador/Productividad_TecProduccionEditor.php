<?php 
	session_start();
	require_once '../modelo/Productividad_TecnicaProduccion.php';
	require_once '../modelo/Productividad_DetalleTecnicaProduccion.php';
	$IdTecnica = $_POST['IdTecnica'];
	$Titulo = $_POST['Titulo'];
	$Detalle = $_POST['Detalle'];

	if (!esValido($Titulo)){
		$_SESSION['error'] = "Titulo invalido, intente nuevamente";
		echo '<script> window.location.replace("../vista/Productividad_TecProduccionEditor.php") </script>';
		return;
	}
	if (!esValido($Detalle,10)){
		$_SESSION['error'] = "Detalle invalido, intente nuevamente";
		echo '<script> window.location.replace("../vista/Productividad_TecProduccionEditor.php") </script>';
		return;
	}


	$Fecha = new DateTime();
	$Fecha->modify('-6 hours');

	if($IdTecnica == "-1")
		$IdTecnica = TecnicaProduccion::agregar($Fecha)->IdTecnica;
	DetalleTecnicaProduccion::agregar($IdTecnica,$Titulo,$Detalle,$Fecha);
	echo '<script> window.location.replace("../vista/Productividad_TecProduccionMain.php") </script>';
 ?>