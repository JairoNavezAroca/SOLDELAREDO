<?php
		$id_area=$_GET['idArea'];
 		 include('../header1.php'); 
 		 include('consultas.php');
 		 $Personal=ListarPersonal($id_area);
 		 $area=ListarArea($id_area);

?>
	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<br>
          	<br>
          	<div align="center">
          		<u><h4>LISTA DE PERSONAL: <?php echo $area[1] ?></h4></u>
          	</div>
          			<!--------------------->
          			<div class="panel-footer">
          				<table  class="table table-bordered">
							  <thead class="thead-dark">
							    <tr class="success">
							      <th scope="col">#</th>
							      <th scope="col">Dni</th>
							      <th scope="col">Nombres</th>
							       <th scope="col">Apellidos</th>
							      <th scope="col">Acciones</th>
							      <th scope="col">Cargo</th>
							    </tr>
							  </thead>
							  <!-- TR:FILA TD:COLUMNA -->
							  <tbody>
							   <?php for ($i=0; $i <sizeof(ListarPersonal($id_area)) ; $i++) { ?>
									    <tr>
									      <th scope="row"><?php echo $i+1 ?></th>
									      <td><?php echo $Personal[$i][0] ?></td>
									      <td><?php echo $Personal[$i][1] ?></td>
									      <td><?php echo $Personal[$i][2] ?></td>
									      <td><?php if ($Personal[$i][3] =='o') {
									      	echo 'OPERARIO';
									      }else{
									      	echo 'ADMINISTRATIVO';
									      }

									      ?>
									      	
									      </td>
									      <td>
									      	<a href="EditarPersonal.php?dni=<?=$Personal[$i][0] ?> & area=<?=$id_area ?>" class="btn btn-success">Editar</a>
									      	<a href="EliminarPersonal.php?dni=<?=$Personal[$i][0] ?> & area=<?= $id_area ?>" class="btn btn-danger">Eliminar</a>
									      </td>
									    </tr>
							  <?php } ?>
							  </tbody>
							</table>
          			</div>
          			
          			<!---------------------->
          </div>
          <a href="exportarlistaP.php?idArea=<?=$id_area ?>" class="btn btn-primary">EXPORTAR</a>
        </div>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>
