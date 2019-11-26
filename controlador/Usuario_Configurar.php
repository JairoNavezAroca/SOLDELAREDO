<?php 
	require_once '../modelo/Usuario.php';
	$IdUsuario = $_POST['IdUsuario'];
	$Apellidos = $_POST['Apellidos'];
	$Nombres = $_POST['Nombres'];
	$Contraseña = $_POST['Contraseña'];
	$Pregunta = $_POST['Pregunta'];
	$Respuesta = $_POST['Respuesta'];
	$Contraseña2 = $_POST['Contraseña2'];
	session_start();
	$Email = $_SESSION['usuario'];
	$usuario = Usuario::where('Email',$Email)->first();
	if (!password_verify($Contraseña2, $usuario->Contraseña)){
		header('location:../vista/Usuario_ConfigurarCuenta.php');
		return;
	}
	$usuario->IdUsuario = $IdUsuario;
	$usuario->Apellidos = $Apellidos;
	$usuario->Nombres = $Nombres;
	if ($Contraseña != '')
		$usuario->Contraseña = $Contraseña;
	if ($Pregunta != '')
		$usuario->Pregunta = $Pregunta;
	if ($Respuesta != '')
		$usuario->Respuesta = $Respuesta;
	$usuario->save();
	header('location:../vista/Usuario_ConfigurarCuenta.php');
 ?>