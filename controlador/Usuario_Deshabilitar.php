<?php 
	require_once '../modelo/Usuario.php';
	$IdUsuario = $_GET['IdUsuario'];
	Usuario::deshabilitar($IdUsuario);
	$_SESSION['mensaje'] = 'El email ha sido desactivado';
	header('location:../vista/Usuario_Ver.php');

 ?>
