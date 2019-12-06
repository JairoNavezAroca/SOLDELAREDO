<?php 
	require_once '../modelo/Usuario.php';
	$IdUsuario = $_POST['IdUsuario'];
	$Apellidos = $_POST['Apellidos'];
	$Nombres = $_POST['Nombres'];
	$Email = $_POST['Email'];
	$Contraseña = $_POST['Contraseña'];
	$Pregunta = $_POST['Pregunta'];
	$Respuesta = $_POST['Respuesta'];
	$Area = $_POST['Area'];

	session_start();
	if ($IdUsuario == ''){
		$res = Usuario::registrar($IdUsuario,$Apellidos,$Nombres,$Email,$Contraseña,$Pregunta,$Respuesta,$Area);
		$_SESSION['mensaje'] = 'Usuario Registrado';
	}
	else{
		$res = Usuario::modificar($IdUsuario,$Apellidos,$Nombres,$Email,$Contraseña,$Pregunta,$Respuesta,$Area);
		$_SESSION['mensaje'] = 'Usuario Modificado';
	}
	if ($res)
		header('location:../vista/Usuario_Ver.php');
	else{
		$_SESSION['mensaje'] = 'El email está en uso';
		header('location:../vista/Usuario_Editor.php');
	}
 ?>
