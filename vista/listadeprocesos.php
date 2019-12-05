<?php
  include("../header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<div class="x_panel">
          		<div class="x_title" style="background-color: #2A3F54;">
			        <h2><font color="White">Historial de procesos</font> </h2>
			        <div class="clearfix"></div>
	            </div>
          		<form class="form-horizontal form-label-left" >
		          <div class="form-group"">
		            <label class="control-label col-md-8 col-sm-7 col-xs-12">Search:</label>
		              <div class="col-md-3 col-sm-7 col-xs-12">
		                 <input type="search" id="search" required="required" class="form-control col-md-9 col-xs-12" placeholder="Buscar">
		              </div>
		          </div>
		        </form>
		        <div class="clearfix"></div>
          		<div class="col-md-12 col-sm-12 col-xs-12">
				  <table id="datatable" class="table" border="0">
				    <thead>
				     <tr>
				      <th class="col-md-2 col-sm-2 col-xs-12">Nro de lista</th>
				      <th class="col-md-2 col-sm-2 col-xs-12">Año</th>
				      <th class="col-md-2 col-sm-2 col-xs-12">Version</th>
				      <th class="col-md-2 col-sm-2 col-xs-12">Opciones</th>
				     </tr>
				    </thead>
				    <tbody id="listas">
				                          
				    </tbody>
				  </table>
				</div> 
          	</div>	
          </div>
        </div>
        <!-- /page content -->
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
    <script src="../js/lista.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- LINKS QUE SE REQUIERAN-->

    <!------------------------------------->
  </body>
</html>
