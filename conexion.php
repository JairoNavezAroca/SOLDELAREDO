<?php
	include("config.php");
	$conexion = new mysqli( $Servidor, $User, $Password, $BaseDeDatos);
	$conexion -> set_charset("utf8");
?>