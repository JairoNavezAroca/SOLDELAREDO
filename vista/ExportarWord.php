
<?php
  header("Content-type: application/vnd.ms-word");
  $hoy=date("Y-m-d");
  header("Content-Disposition: attachment; filename=Reporte$hoy.doc");
  include("consultas.php");
  $descripcion=$_GET['beneficio'];
 $fechaI=$_GET['fechaI'];
 $fechaF=$_GET['fechaF'];

  $personal= ListarAsistencias($fechaI,$fechaF);
    for ($i=0; $i <sizeof($personal) ; $i++) { 
  			$dniA[]=$personal[$i][5];
 		 }
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>BENEFICIOS</title>
 </head>
 <body>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
   <br><br><br>
<div align="center">
	<u><h4>LISTA DE BENEFICIADOS:<?php echo $descripcion ?></h4></u> 
</div>

  <table border="1" cellpadding="0" cellspacing="0">
	  <thead>
	    <tr   bgcolor="#33A8FF">
	      <th scope="col">#</th>
	      <th scope="col">DNI</th>
	      <th scope="col">NOMBRES</th>
	      <th scope="col">APELLIDOS</th>
	      <td scope="col">BENEFICIO Y RECOMPENSA</td>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
	  	 for ($i=0; $i <sizeof($personal) ; $i++) { 
	  	 	if ($personal[$i][2]=='F') {
	  	 		$dniF[]=$personal[$i][5];
	  	 	}
	  	 }
	  	 $dnisver=array_diff($dniA, $dniF);
	  	 $dnisinrepetir=array_unique($dnisver);


	  	 for ($j=0; $j <sizeof($dnisinrepetir) ; $j++) { ?>
	  	 	<tr>
	  	 		 <th scope="row"><?php echo $j+1; ?></th>
	  	 		 <td><?php echo $dnisinrepetir[$j] ?></td>
	  	 		 <?php $persona=BuscarPersonaDni($dnisinrepetir[$j]) ?>
	  	 		 <td><?php echo $persona[1] ?></td>
	  	 		 <td><?php echo $persona[2] ?></td>
	  	 		 <td><?php echo $descripcion ?></td>
	  	 		 <?php 
	  	 		 	$sql="INSERT INTO Beneficios(descripcion,DniPersonal) values ('$descripcion','$dnisinrepetir[$j]')";
	  	 		 	EjecutarConsulta($sql);
	  	 		 ?>
	  	 	</tr>
	  	<?php }
	  	?>
	  
	  </tbody>
</table>
          </div>
        </div>
 </body>
 </html>

