<?php
  include("..\header1.php"); 
?>		      	
		</div>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row"> 
			      <!-- page content -->
			      	 <div class="col-md-11 col-sm-11 col-xs-12">
		                <div class="x_panel">
		                  <div class="x_title">
		                  	<h2 id="titulo"></h2>
		                  	<div class="clearfix"></div>
		                  </div>

		                  <div class="x_content">
		                  	<input type="hidden" value="<?php echo $_GET['idproceso'] ?>" id="idproceso">
		                  	<input type="hidden" value="<?php echo $_GET['idtarea'] ?>" id="idtarea">

				            <form id="frmActividad" class="form-horizontal form-label-left">
				              <div class="form-group"">
				                   <label class="control-label col-md-4 col-sm-3 col-xs-12">Actividad*</label>
				                   <div class="col-md-4 col-sm-4 col-xs-12">
				                     <input type="text" id="actividad" required="required" class="form-control col-md-7 col-xs-12">
				                   </div>
				              </div>
				              <input type="hidden" id="idactividad">
				              <div class="form-group">
				                  <div class="col-md-6 col-md-offset-5">
				                    <button type="Submit" class="btn btn-primary">Registrar</button>
				                    <button type="Reset" class="btn btn-primary">Limpiar</button>
				                  </div>
				              </div>
				            </form>

				            <div class="ln_solid"></div>
				              <div class="col-md-12 col-sm-12 col-xs-12">
				                <table id="datatable" class="table" border="0">
				                  <thead>
				                    <tr>
				                      <th class="col-md-6 col-sm-2 col-xs-12">Actividad</th>
				                      <th class="col-md-2 col-sm-2 col-xs-12">Opciones</th>
				                    </tr>
				                  </thead>
				                  <tbody id="actividades">
				                          
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

        <footer>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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

    <script src="../js/appactividad.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  </body>
</html>