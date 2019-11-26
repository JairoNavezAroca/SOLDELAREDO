<?php
  include("../header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>OBJETIVOS DE PRODUCCIÓN</h2>                  
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <div class="col-md-7 col-sm-6 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="objetivo" placeholder="OBJETIVO">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="date" class="form-control" id="fecha">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <button type="button" class="btn btn-success" onclick="registrar()"><i class="fa fa-save"></i> Registrar</button>
                    </div>
                  </div>
                </form>
                <br />
                <h4> LISTA OBJETIVOS</h4>
                <div class="table-responsive col-md-8 col-sm-8 col-xs-12 has-feedback" id="tablaObjProd">
                    
                </div>
              </div>
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

    <!-- LINKS QUE SE REQUIERAN-->
    <script src="../js/objetivosProduccion.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>