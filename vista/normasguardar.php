<?php
	include("consultas.php");
	$norma=$_POST['norma'];
	$fecha=$_POST['fecha'];
	$sql="INSERT INTO NormasSeguridad(descripcion,fecha) values ('$norma','$fecha')";
	EjecutarConsulta($sql);
	header("Location:normas.php");
?>