<?php
  include("../header1.php"); 
  include("consultas.php");
  date_default_timezone_set('America/Lima');
  $areas=ListarAreas();
?>
        <!-- page content -->
		 <div class="right_col" role="main">
          <div class="">
          	<div align="center"><h4>NOMINA DE PERSONAL ACTUALIZADO <?php echo date("F")?> DEL <?php echo date("Y") ?></h4></div>
			<form class="needs-validation" novalidate method="POST" action="Nomina.php">
				  <div class="form-row">
				    <div class="col-md-4 mb-3">
				      <label for="validationCustom01">FECHA INICIO</label>
				      <input type="text" class="form-control" name="fechaI" id="fechaI" value="<?php echo date("Y-m-d") ?>"  >
				    </div>
				    <div class="col-md-4 mb-3">
				      <label for="validationCustom02">FECHA FINAL</label>
				      <input type="text" class="form-control" name="fechaF" id="fechaF"  value="<?php echo date("Y-m-d") ?>" >
				    </div>
					<div class="col-md-4 mb-3">
				      <br>
				       <button  class="btn btn-primary" type="submit">ACEPTAR</button>
				    </div>
				 </div>
				 
			</form>
          	<br>
          	<br>
          	<?php
          	if (isset($_POST['fechaI']) && isset($_POST['fechaF')) {
          		$inicio=$_POST['fechaI'];
          		$fin=$_POST['fechaF'];
          		$fechas=ListarAsistencias($inicio,$fin);
          		var_dump($fechas);
          	?>
          		
          				/*<?php for ($i=0; $i <sizeof($areas) ; $i++) {
          						$idarea=$areas[$i][0];
          						$empleados=ListarPersonal($idarea);
          					 ?>
	          					<table class="table thead-dark">
	          						<tr><?php echo $areas[$i][1] ?></tr>
									 <thead>
									    <tr>
									      <th scope="col">#</th>
									      <th scope="col">DNI</th>
									      <th scope="col">NOMBRES</th>
									      <th scope="col">APELLIDO</th>
									      <th scope="col">SUELDO BRUTO</th>
									      <TH scope="col">Otros. Ing</TH>
									      <th scope="col">DESCUENTOS</th>
									      <th scope="col">TOTAL NETO</th>
									    </tr>
									  </thead>
									 <?php  for ($j=0; $j <sizeof($empleados) ; $j++) { 									  	?>
									  <tbody>
									   <tr>
									      <th scope="row"><?php echo $j+1 ?></th>
									      <td><?php echo $empleados[$j][0] ?></td>
									      <td><?php echo $empleados[$j][1] ?></td>
									      <td><?php echo $empleados[$j][2] ?></td>
									      <td><?php echo $empleados[$j][6] ?></td>
									      <td>
									      	<?php
									      	for ($j=0; $j <sizeof($asistencias) ; $j++) { 
									      		if ($inicio > strtotime($asistencias[$i][1]) && strtotime($asistencias[$i][1]) < $fin) {
									      			echo $asistencias[$i][1];
									      		}
									      	}
									      	?>
									      </td>
									      
									      
									    </tr>
									  <?php	} ?>
									   
									  </tbody>
	          						
	          				    </table>
          					<?php } ?>-->
							  <!-- TR:FILA TD:COLUMNA -->*/;

				
          </div>
        </div>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>
