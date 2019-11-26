<?php
  include("../header1.php"); 
  include("consultas.php");
  $descripcion=$_POST['beneficio'];
  $fechaI=$_POST['fechaI'];
  $fechaF=$_POST['fechaF'];

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
<br>
  <table class="table table-bordered" border="5px" >
	  <thead>
	    <tr class="success">
	      <th scope="col">#</th>
	      <th scope="col">DNI</th>
	      <th scope="col">NOMBRES</th>
	      <th scope="col">APELLIDOS</th>
	      <th scope="col">BENEFICIO Y RECOMPENSA</th>
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
 <a href="ExportarWord.php?beneficio=<?=$descripcion ?> & fechaI=<?=$fechaI ?> & fechaF=<?=$fechaF ?> " class="btn btn-warning">EXPORTAR</a> 
          </div>
        </div>
 </body>
 </html>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>
