<?php 
	require_once '../modelo/Usuario.php';
	$Email = $_POST['Email'];
	$Pregunta = $_POST['Pregunta'];
	$Respuesta = $_POST['Respuesta'];

	session_start();
	if(Usuario::validar($Email,$Pregunta,$Respuesta)){
		$_SESSION['mensaje'] = true;
		$_SESSION['email'] = $Email;
		header('location:../vista/Usuario_Recuperar.php');
	}
	else{
		$_SESSION['error'] = 'Datos incorrectos, intente nuevamente';
		header('location:../vista/Usuario_Recuperar.php');
	}
?>
