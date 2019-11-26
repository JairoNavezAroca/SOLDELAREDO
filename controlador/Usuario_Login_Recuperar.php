<?php 
	require_once '../modelo/Usuario.php';
	$Email = $_POST['Email'];
	$Contraseña1 = $_POST['Contraseña1'];
	$Contraseña2 = $_POST['Contraseña2'];

	session_start();
	if(Usuario::recuperar($Email,$Contraseña1,$Contraseña2)){
		$_SESSION['usuario'] = $Email;
		header('location:../index.php');
	}
	else{
		$_SESSION['error'] = 'Las contraseñas no coinciden, intente nuevamente';
		header('location:../vista/Usuario_Recuperar.php');
	}
?>
