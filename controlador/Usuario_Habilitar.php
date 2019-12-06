<?php 
	require_once '../modelo/Usuario.php';
	$IdUsuario = $_GET['IdUsuario'];
	Usuario::habilitar($IdUsuario);
	$_SESSION['mensaje'] = 'El email ha sido activado';
	header('location:../vista/Usuario_Ver.php');

 ?>
