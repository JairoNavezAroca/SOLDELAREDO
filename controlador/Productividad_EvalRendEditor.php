<?php 
	session_start();
	require_once '../modelo/Productividad_EvRendimiento.php';
	require_once '../modelo/Productividad_DetalleEvRendimiento.php';
	$IdEvRendimiento = $_POST['IdEvRendimiento'];
	$DniPersonal = $_POST['DniPersonal'];
	$Porcentaje = $_POST['Porcentaje'];
	$Observacion = $_POST['Observacion'];

	if (!esValido($Observacion,10)){
		$_SESSION['error'] = "Observacion invalida, intente nuevamente";
		echo '<script> window.location.replace("../vista/Productividad_EvalRendEditor.php") </script>';
		return;
	}


	$Fecha = new DateTime();
	$Fecha->modify('-6 hours');

	if($IdEvRendimiento == "-1")
		$IdEvRendimiento = EvRendimiento::agregar($DniPersonal)->IdEvRendimiento;
	DetalleEvRendimiento::agregar($IdEvRendimiento,$Porcentaje,$Observacion,$Fecha);
	echo '<script> window.location.replace("../vista/Productividad_EvalRendMain.php") </script>';
 ?>