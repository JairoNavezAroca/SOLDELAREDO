<?php
		header("Content-type: application/vnd.ms-word");
		  $hoy=date("Y-m-d");
		  header("Content-Disposition: attachment; filename=Reporte$hoy.doc");
		  include("consultas.php");
		$id_area=$_GET['idArea'];
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
          			<div class="panel-footer" align="center">
          				<table  border="1" cellpadding="0" cellspacing="0">
							  <thead class="thead-dark">
							    <tr bgcolor="#33A8FF">
							      <th scope="col">#</th>
							      <th scope="col">Dni</th>
							      <th scope="col">Nombres</th>
							       <th scope="col">Apellidos</th>
							      <th scope="col">Acciones</th>
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
									    </tr>
							  <?php } ?>
							  </tbody>
							</table>
          			</div>
          			
          			<!---------------------->
          </div>
        </div>
        <!-- /page content -->
