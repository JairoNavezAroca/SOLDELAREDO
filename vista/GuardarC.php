<?php 
	include("consultas.php");
	$idarea=$_POST['idarea'];
	$descripcion=$_POST['descripcion'];
	$capacitador=$_POST['empresa'];
	$fecha=$_POST['fecha'];
	$motivo=$_POST['motivo'];
	$sql="INSERT INTO Capacitaciones(idarea,descripcion,capacitador,fecha) values('$idarea','$descripcion','$capacitador','$fecha')";
	EjecutarConsulta($sql);
	header("Location:ListarC.php");	
?>