
<?php

 		 include('../header1.php'); 
 		 include('consultas.php');
 		 $area=ListarAreas();
?>
	<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          			<!--------------------->
          			<table  class="table table-bordered">
							  <thead class="thead-dark">
							    <tr class="success">
							      <th scope="col">#</th>
							      <th scope="col">Area</th>
							      <th scope="col">Acciones</th>
							    </tr>
							  </thead>
							  <!-- TR:FILA TD:COLUMNA -->
							  <tbody>
							   <?php for ($i=0; $i <sizeof(ListarAreas()) ; $i++) { ?>
									    <tr>
									      <th scope="row"><?php echo $i+1 ?></th>
									      <td><?php echo $area[$i][1] ?></td>
									      <td><a href="ListarPersonal.php?idArea=<?=$area[$i][0] ?>" class="btn btn-primary">Personal</a></td>
									    </tr>
							  <?php } ?>
							  </tbody>
							</table>
          			<!---------------------->
          </div>
        </div>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>

        
