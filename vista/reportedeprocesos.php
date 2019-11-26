<?php
	include("../conexion.php");

	$proceso="SELECT *FROM procesos";
	$rs_procesos=$conexion->query($proceso);
	$ListaProcesos=mysqli_fetch_all($rs_procesos);


?>
<?php
  include("..\header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row"> 
			      <!-- page content -->
			     <div class="col-md-12 col-sm-12 col-xs-12">
		            <div class="x_panel">
		                <div class="x_title">
		                    <h2 id="title"></h2>
		                	<form class="form-horizontal form-label-left" >
		                     <div class="form-group">
		                        <label class="control-label col-md-8 col-sm-7 col-xs-12">Search:</label>
		                          <div class="col-md-3 col-sm-7 col-xs-12">
		                            <input type="search" id="search" required="required" class="form-control col-md-9 col-xs-12" placeholder="Buscar">
		                          </div>
		                     </div>
		                	</form>
		                	<div class="clearfix"></div>
		                </div>
				        <div class="ln_solid"></div>
				          <div class="col-md-12 col-sm-12 col-xs-12">
				            <table id="datatable" class="table table-bordered" >
				              <thead>
				                <tr>
				                <th class="col-md-4 col-sm-2 col-xs-12">Proceso</th>
				                <th class="col-md-2 col-sm-2 col-xs-12">Tareas</th>
				                <th class="col-md-2 col-sm-2 col-xs-12">Actividades</th>
				                </tr>
				                </thead>
				                <tbody id="procesos">
				                  	<?php for ($i=0; $i <sizeof($ListaProcesos) ; $i++) {
				                  		//LA TAREA SE LISTA CON EL ID DEL PROCESO
				                  			$idproceso=$ListaProcesos[$i][0];
				                  			$tarea="SELECT *FROM Tareas WHERE idProceso='$idproceso'";
											$rs_tareas=$conexion->query($tarea);
											$listaTarea=mysqli_fetch_all($rs_tareas);//Listamos las tareas
				                  		?>
				                  		<tr>
				                  			<td rowspan="<?php echo (sizeof($listaTarea))+1 ?>">
				                  				<?php
				                  				echo $ListaProcesos[$i][1];
				                  				?>
				                  			</td>
				                  			<?php 
				                  			for ($j=0; $j <sizeof($listaTarea) ; $j++) { 
				                  				$idtarea=$listaTarea[$j][0];
				                  				$actividad="SELECT *FROM Actividades WHERE idTarea='$idtarea'";
												$rs_actividad=$conexion->query($actividad);
												$listaActividad=mysqli_fetch_all($rs_actividad);
				                  				?>
				                  					<tr>
				                  						<td rowspan="<?php echo (sizeof($listaActividad))+1 ?>">
				                  							<?php echo $listaTarea[$j][2]; ?>
				                  							
				                  						</td>
				                  						<?php
				                  						for ($m=0; $m <sizeof($listaActividad) ; $m++) { 
				                  						?>
				                  							<tr>
				                  								<td>
				                  									<?php
				                  									echo $listaActividad[$m][1];
				                  									?>
				                  								</td>
				                  							</tr>
				                  						<?php
				                  						}
				                  						?>
				                  					</tr>
				                  				<?php
				                  			}
				                  			?>
				                  		</tr>
				                  		<?php
				                  	} ?>  
				                </tbody>
 
				            </table>
				          </div>
				        </div> 
		            </div>
              	 </div>
			      <!-- page content -->
            </div>
          </div>
        </div>
        <!-- /page content -->
<!-- footer content -->
        <footer>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>   

  </body>
</html>