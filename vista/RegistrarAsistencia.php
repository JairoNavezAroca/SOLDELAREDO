<!--9E2(497o-->
<?php
		$id_area=$_GET['idArea'];
 		 include('../header1.php'); 
 		 include('consultas.php');
 		 $Personal=ListarPersonal($id_area);
 		 date_default_timezone_set('America/Lima');

?>
	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<br>
          	<br>
          			<!--------------------->
          			<table class="table table-bordered">
							  <thead class="thead-dark">
							    <tr class="success">
							      <th scope="col">#</th>
							      <th scope="col">Dni</th>
							      <th scope="col">Nombres</th>
							      <th scope="col">Fecha</th>
							      <th scope="col">Asistencia</th>
							      <th scope="col">Hora de Entrada</th>
							      <th scope="col">Hora de Salida</th>
							      
							    </tr>
							  </thead>
							  <!-- TR:FILA TD:COLUMNA -->
							  <tbody>
							  	<form method="POST" action="RegistrarAsistecia1.php" >
							   <?php for ($i=0; $i <sizeof($Personal); $i++) { ?>
									    <tr>
									      <th scope="row"><?php echo $i+1 ?></th>
									      <td>	
									      	<input type="text" class="form-control" readonly=""
									      	name="dni[]" id="dni" value="<?= $Personal[$i][0] ?>"> </td>
									      <td><input type="text" class="form-control" readonly=""
									      	name="nombre"  value="<?php echo $Personal[$i][1] ?>"></td>
									      <td><input type="date" class="form-control" readonly=""
									      	name="fecha"  value="<?php echo date("Y-m-d") ?>"></td>
									      <td>
												<select class="selectpicker" id="mi_select" name="mi_select[]">
												  <option value="A">Asistencia</option>
												  <option value="F">Falta</option>
												</select>
									      </td>
									       <td><input type="text" class="form-control"  name="HoraE[]" id="HoraS" value="<?= date('H:i:s') ?>"></td>
									      <td><input type="text" class="form-control"  name="HoraS[]" id="HoraE" value="<?= date('H:i:s') ?>"></td>
									    </tr>
							  <?php } ?>

							  <button type="submit" class="btn btn-primary">GUARDAR</button>
							  </form>
							  </tbody>

							</table>
							  
					

          			<!---------------------->
          </div>
        </div>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>