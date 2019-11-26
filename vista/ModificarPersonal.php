<?php
	$dni=$_GET['dni'];
	$area=$_GET['area'];
	require("consultas.php");
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$fechnaci=$_POST['fechaNac'];
	$sql="UPDATE personal SET nombre='$nombre',direccion='$direccion',telefono='$telefono',correo='$correo',fechaNac='$fechanaci' where DniPersonal='$dni' ";
	EjecutarConsulta($sql);
	header("Location:ListarPersonal.php?idArea=$area");
?>