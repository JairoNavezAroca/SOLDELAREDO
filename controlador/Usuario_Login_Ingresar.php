<?php 
	require_once '../modelo/Usuario.php';
	$Email = $_POST['Email'];
	$Contraseña = $_POST['Contraseña'];
	
	session_start();
	if(Usuario::ingresar($Email,$Contraseña)){
		$_SESSION['usuario'] = $Email;
		header('location:../vista/index.php');
	}
	else{
		$_SESSION['error'] = 'Email y/o contraseña incorrecto, intente nuevamente; o verifique si el usuario está inhabilitado';
		header('location:../vista/Usuario_Login.php');
	}
?>
