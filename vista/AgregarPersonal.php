<?php
  include("consultas.php");
  $nombre=$_POST['nombre'];
  $dni=$_POST['dni'];
  $apellido=$_POST['apellido'];
  $cargo=$_POST['mi_select'];
  $salario=$_POST['salario'];
  $fechaIn=$_POST['inicioC'];
  $fechaFn=$_POST['finC'];
  $id=$_POST['idarea'];
	$sql="INSERT INTO Personal(DniPersonal,nombre ,apellido,cargo,inicioContrato ,finContrato ,salario,idarea) values ('$dni','$nombre','$apellido','$cargo','$fechaIn','$fechaFn',$salario,$id)";
  EjecutarConsulta($sql);
  header("Location:MantenedorPersonal.php");
 
?>
