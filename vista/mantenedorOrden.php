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
				                        <label class="control-label col-md-8 col-sm-8 col-xs-12">Search:</label>
				                          <div class="col-md-4 col-sm-7 col-xs-12">
				                            <input type="search" id="search" required="required" class="form-control col-md-9 col-xs-12" placeholder="Buscar">
				                          </div>
				                     </div>
				                    </form>
				                </div>
		                      
				                <table id="datatable" class="table" border="0">
				                  <thead>
				                   	<tr>
				                    <th class="col-md-6 col-sm-2 col-xs-12">Nro Doc</th>
				                    <th class="col-md-2 col-sm-2 col-xs-12">Personal</th>
				                    <th class="col-md-2 col-sm-2 col-xs-12">Cargo</th>
				                    <th class="col-md-2 col-sm-2 col-xs-12">Propuesta</th>
				                    </tr>
				                    </thead>
				                    <tbody id="implementacion">
				                          
				                    </tbody>
				                </table>
	             	</div>
	             </div>	 
			      <!-- page content -->
            </div>
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

    <script src="../js/ordenimp.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>   

  </body>
</html>