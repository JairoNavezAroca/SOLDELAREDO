<?php
  include("..\header1.php"); 
?>		      	
		</div>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row"> 
			 <!-- page content -->
			 	 <div class="col-md-11 col-sm-6 col-xs-12">
	             	<div class="x_panel">
                       
	             		 <div class="x_title" style="background-color: #2A3F54;">
			                  <h2>Orden de implementacion </h2>
			                  <div class="clearfix"></div>
	               		 </div>
	               		 <input type="hidden" value="<?php echo $_GET['idproceso'] ?>" id="idproceso">
	             		 <form id="frmOrden" class="form-horizontal form-label-left">
	                        <div class="form-group">
	                          <label class="control-label col-md-7 col-sm-1 col-xs-12">Fecha*</label>
	                          <div class="col-md-3 col-sm-3 col-xs-12">
	                            <input type="text" id="fecha" required="required" class="form-control col-md-5col-xs-12">
	                          </div>
	                        </div>
	                        <div class="form-group">
	                           <label class="control-label col-md-2 col-sm-2 col-xs-12">Proceso*</label>
	                           <div class="col-md-4 col-sm-2 col-xs-12">
	                            <input type="text" id="proceso" required="required" class="form-control col-md-4col-xs-12">
	                           </div>
	                           <label class="control-label col-md-1 col-sm-2 col-xs-12">Codigo*</label>
	                           <div class="col-md-3 col-sm-2 col-xs-12">
	                            <input type="text" id="codigo" required="required" class="form-control col-md-4col-xs-12">
	                           </div>
                          	 </div>
	                        <div class="form-group">
	                           <label class="control-label col-md-2 col-sm-2 col-xs-12">Responsable*</label>
	                           <div class="col-md-4 col-sm-2 col-xs-12">
	                            <input type="text" id="dni" required="required" class="form-control col-md-4col-xs-12">
	                           </div>
	                           <label class="control-label col-md-1 col-sm-2 col-xs-12">Cargo*</label>
	                           <div class="col-md-3 col-sm-2 col-xs-12">
	                            <input type="text" id="cargo" required="required" class="form-control col-md-4col-xs-12">
	                           </div>
                          	 </div>
                          	 <input type="hidden" value="<?php echo $_GET['idmejora'] ?>" id="idmejora">
                          	 <input type="hidden" name="" id="idorden">
                          	<div class="form-group">
			                  <label class="col-sm-2 control-label">Propuesta*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:55px;" id="propuesta" name="descr" required=""></textarea>
			                  </div>
                			</div>
	                        <div class="form-group">
			                  <label class="col-sm-2 control-label">Actividades a realizar*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:90px;" id="actividades" name="descr" required=""></textarea>
			                  </div>
                			</div>
                			<div class="form-group">
			                  <label class="col-sm-2 control-label">Doc. relacionados*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:55px;" id="docrelacionados" name="descr" required=""></textarea>
			                  </div>
                			</div>
                			<div class="form-group">
			                  <label class="col-sm-2 control-label">Observaciones*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:55px;" id="observaciones" name="descr" required=""></textarea>
			                  </div>
                			</div>
                			<div class="form-group">
					           <div class="col-md-6 col-md-offset-5">
					             <button type="Submit" class="btn btn-primary">Registrar</button>
					             <button type="Reset" class="btn btn-primary">Limpiar</button>
					           </div>
					        </div>
                    	</form>
                    	<br>
                   		<div class="ln_solid"></div>
						<div class="x_title">
					        <h2 id="title"></h2>
					         <form class="form-horizontal form-label-left" >
					           <div class="form-group"">
					             <label class="control-label col-md-8 col-sm-8 col-xs-12">Search:</label>
					             <div class="col-md-4 col-sm-7 col-xs-12">
					                <input type="search" id="search" required="required" class="form-control col-md-9 col-xs-12" placeholder="Buscar">
					             </div>
					           </div>
					         </form>
					    </div>
			                
					    <div class="col-md-12 col-sm-12 col-xs-12">
					       <table id="datatable" class="table" border="0">
					          <thead>
					             <tr>
					             <th class="col-md-1 col-sm-2 col-xs-12">Id</th>
					             <th class="col-md-3 col-sm-2 col-xs-12">Personal</th>
					             <th class="col-md-2 col-sm-2 col-xs-12">Proceso</th>
					             <th class="col-md-4 col-sm-2 col-xs-12">Propuesta</th>
					             <th class="col-md-2 col-sm-2 col-xs-12"></th>
					             </tr>
					          </thead>
					          <tbody id="implementacion">
					                          
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

    <script src="../js/orden.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  </body>
</html>