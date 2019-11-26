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
	             		<br>
	             		 <form id="formulario" class="form-horizontal form-label-left">
	                        <div class="form-group"">
	                           <label class="control-label col-md-3 col-sm-2 col-xs-12">Proceso</label>
	                           <div class="col-md-6 col-sm-9 col-xs-12">
	                            <select name="tipo" onchange="" class="form-control" id="tipo">
	                            </select>
                          	   </div>
                          	    <input type="hidden" id="seleccionado">
	                        </div>
                    	</form>
                    	<br>
                    		                        
	             		 <div class="x_title" style="background-color: #2A3F54;">
			                  <h2>Mejora de Tareas </h2>
			                  <div class="clearfix"></div>
	               		 </div>
	               		 <div id="agregar">
	               		 	   		 <form id="frmPlan" class="form-horizontal form-label-left">
	                        <div class="form-group"">
	                          <label class="control-label col-md-7 col-sm-1 col-xs-12">Fecha*</label>
	                          <div class="col-md-3 col-sm-3 col-xs-12">
	                            <input type="text" id="fecha" required="required" class="form-control col-md-5col-xs-12">
	                          </div>
	                        </div>
	                        <div class="form-group">
	                          <label class="control-label col-md-2 col-sm-2 col-xs-12">Tarea*</label>
	                           <div class="col-md-8 col-sm-9 col-xs-12">
	                            <select name="tipo" onchange="" class="form-control" id="selectTarea">
	                            	<option disabled="" selected="" value='-1' id="edittarea">Seleccione tarea</option>
	                            </select>
                          	   </div>
                          	 </div>
                          	 <input type="hidden" name="" id="idtarea">
                          	 <input type="hidden" name="" id="idmejora">
	                        <div class="form-group">
			                  <label class="col-sm-2 control-label">Diagnostico*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:55px;" id="diagnostico" name="descr" required=""></textarea>
			                  </div>
                			</div>
                			<div class="form-group">
			                  <label class="col-sm-2 control-label">Causas*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:55px;" id="causa" name="descr" required=""></textarea>
			                  </div>
                			</div>
                			<div class="form-group">
			                  <label class="col-sm-2 control-label">Recomendacion*</label>
			                  <div class="col-sm-8">
			                    <textarea class="form-control" style="height:55px;" id="recomendacion" name="descr" required=""></textarea>
			                  </div>
                			</div>
                			<div class="form-group">
					           <div class="col-md-6 col-md-offset-5">
					             <button type="Submit" class="btn btn-primary">Registrar</button>
					             <button type="Reset" class="btn btn-primary">Limpiar</button>
					           </div>
					        </div>
                    	</form>
	               		 </div>
	             	</div>
	             </div>

				 <div class="col-md-11 col-sm-6 col-xs-12">
	              <div class="x_panel">
	                <div class="x_title" style="background-color: #2A3F54;">
	                  <h2 id="proceso">Observaciones </h2>
	                  <div class="clearfix"></div>
	                </div>
	                <div class="x_content" id="mejora">

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

    <script src="../js/planmejoratareas.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>   

  </body>
</html>