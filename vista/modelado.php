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
		                     <div class="form-group"">
		                        <label class="control-label col-md-8 col-sm-7 col-xs-12">Search:</label>
		                          <div class="col-md-3 col-sm-7 col-xs-12">
		                            <input type="search" id="search" required="required" class="form-control col-md-9 col-xs-12" placeholder="Buscar">
		                          </div>
		                     </div>
		                	</form>
		                	<div class="clearfix"></div>
		                </div>

		                <form id="frmProcesos" class="form-horizontal form-label-left">
				            <div class="form-group"">
				              <label class="control-label col-md-4 col-sm-3 col-xs-12">Proceso*</label>
				              <div class="col-md-4 col-sm-4 col-xs-12">
				               	<input type="text" id="proceso" required="required" class="form-control col-md-7 col-xs-12">
				               </div>
				            </div>
				            <div class="form-group">
		                       	<label class="control-label col-md-4 col-sm-3 col-xs-12">Tipo*</label>
		                        <div class="col-md-4 col-sm-4 col-xs-12">
		                          <select name="tipo" onchange="" class="form-control" id="tipoproceso">
		                            <option>Estrategico</option>
		                            <option>Operativo</option>
		                            <option>Soporte</option>
		                          </select>
	                          	</div>
	                        </div>
				            <input type="hidden" name="" id="idproceso">
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
				                <th class="col-md-4 col-sm-2 col-xs-12">Proceso</th>
				                <th class="col-md-2 col-sm-2 col-xs-12">Tipo</th>
				                <th class="col-md-2 col-sm-2 col-xs-12">Fecha</th>
				                <th class="col-md-2 col-sm-2 col-xs-12">Version</th>
				                <th class="col-md-2 col-sm-2 col-xs-12">Opciones</th>
				                </tr>
				                </thead>
				                <tbody id="procesos">
				                          
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
    
    <script src="../js/appproceso.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>   

  </body>
</html>