<?php
		$dni=$_GET['dni'];
		$area=$_GET['area'];
		//echo $area;
 		include('consultas.php');
 		EliminarPersonal($dni);
        header("Location:ListarPersonal.php?idArea=$area");
?>
