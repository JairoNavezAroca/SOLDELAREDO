<?php
	include("consultas.php");
	$id=$_GET['id'];
	$sql="DELETE FROM normasseguridad WHERE idnorma=$id ";
	EjecutarConsulta($sql);
	header("Location:normas.php");
?>