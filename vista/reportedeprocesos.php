<?php
	include("../conexion.php");

	$proceso="SELECT *FROM Procesos";
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
		                <div class="x_title" style="background-color: #2A3F54;">
			                  <h2><font color="White">Procesos y tareas</font> </h2>
			                  <div class="clearfix"></div>
	               		 </div>
	               		 <br>
				        <div class="col-md-12 col-sm-12 col-xs-12">
				           <table id="datatable" class="table table-bordered" >
				              <thead>
				                <tr>
				                <th class="col-md-4 col-sm-2 col-xs-12">Proceso</th>
				                <th class="col-md-6 col-sm-2 col-xs-12">Tareas</th>
				                </tr>
				               </thead>
				               <tbody id="procesos">
				                  	<?php for ($i=0; $i <sizeof($ListaProcesos); $i++) {
				                  		//LA TAREA SE LISTA CON EL ID DEL PROCESO
				                  			$idproceso=$ListaProcesos[$i][0];
				                  			$band=0;
				                  			$tarea="SELECT *FROM Tareas WHERE idProceso='$idproceso'";
											$rs_tareas=$conexion->query($tarea);
											$listaTarea=mysqli_fetch_all($rs_tareas);//Listamos las tareas
											if(sizeof($listaTarea)==0){$listaTarea[$i][0]=1;$band=1;}
											?>
											<tr>
				                  			<td rowspan="<?php echo (sizeof($listaTarea)) ?>">
				                  				<?php
				                  				echo $ListaProcesos[$i][1];
				                  				?>
				                  			</td>
				                  				<?php 
				                  				  if($band==0){
						                  			for ($j=0; $j <sizeof($listaTarea) ; $j++) { 
						                  				?>	
						                  						<td>
						                  							<?php echo $listaTarea[$j][3]; ?>	
						                  						</td></tr>
						                  				<?php
						                  			}
				                  				  }else{
					                  			?>
					                  			<td></td>
					                  			<?php
					                  				}
					                  			?>
				                  		<?php
				                  	} ?>  
				                  </tr>
				               </tbody>
				           </table>
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