<?php
  include("../header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>LISTAR FODA</h2>                  
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="annio" placeholder="AÑO">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <button type="button" class="btn btn-success" onclick="registrarFODA()"><i class="fa fa-save"></i> Registrar</button>
                    </div>
                  </div>
                </form>
                <br />
                <div class="table-responsive col-md-6" id="tablaFoda">
                  
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
    <script src="../js/foda.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>