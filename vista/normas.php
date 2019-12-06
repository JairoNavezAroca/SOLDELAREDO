<?php
  include("../header1.php"); 
  include("consultas.php");
  $normas=ListarNormas();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          		
            <div class="panel panel-default">
			  <div class="panel-body">
			    
			  	<div class="container">
					  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">AGREGAR</button>

					  <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    	<form method="POST" action="normasguardar.php">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">NORMA DE SEGURIDAD</h4>
					        </div>
					        <div class="modal-body">
					          	  <div class="form-row">
								    
								      <input type="text" required name="norma" pattern="[A-Za-z\sáéíóú]+" minlength="5" id="norma" class="form-control">
								     <div class="form-group">
				                  		 <div class="input-group date mo-date">
										  <input type="date" class="form-control" required name="fecha" id="fecha" min="2019-12-01"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
										</div>
									  </div>
								    
								  </div>

					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					          <button type="submit" class="btn btn-primary mb-2">GUARDAR</button>
					      </div>
					    </div>
					    </form>
					  </div>
					</div>




			  </div>
			  <div class="panel-footer">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">NORMA</th>
				      <th scope="col">FECHA</th>
				      <th scope="col">ACCIONES</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php for ($i=0; $i <sizeof($normas) ; $i++) { 
				  		?>
				  		<tr>
				  			 <th scope="row"><?php echo $i+1 ?></th>
				  			<td><?php echo $normas[$i][1] ?></td>
				  			<td><?php echo $normas[$i][2] ?></td>
				  			<td><a href="EliminarN.php?id=<?=$normas[$i][0] ?>" type="button" class="btn btn-danger">ELIMINAR</a></td>
				  		</tr>
				  		<?php
				  	} ?>
				  </tbody>
				</table>
			  </div>
			</div>
          </div>
        </div>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>
