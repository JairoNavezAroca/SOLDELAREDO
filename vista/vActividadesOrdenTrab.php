<?php
  include("../header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="x_panel">
                <div class="x_title">
                  <h2>ACTIVIDADES</h2>                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                      <div class="col-md-7 col-sm-7 col-xs-12 has-feedback">
                        <input type="text" class="form-control" id="actividad" placeholder="ACTIVIDAD">
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                        <input type="text" class="form-control" id="cantidad" placeholder="CANTIDAD">
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                        <input type="text" class="form-control" id="importe" placeholder="IMPORTE">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                        <button type="reset" class="btn btn-secondary col-md-4 col-sm-4 col-xs-12" ><i class="fa fa-paint-brush"></i> Limpiar</button>
                        <button type="button" class="btn btn-success col-md-4 col-sm-4 col-xs-12" id="registrarActividad" onclick="registrarAct()"><i class="fa fa-save"></i> Registrar</button>
                        <button type="button" class="btn btn-success col-md-4 col-sm-4 col-xs-12" onclick="actualizarAct()" id="actualizarActividad" style="display: none;"><i class="fa fa-save"></i> Actualizar</button>
                      </div>
                    </div>
                  </form>
                  <br />
                  <h4> LISTA DE ACTIVIDADES</h4>
                  <div class="table-responsive" id="tablaActividadesTrabajo">
                    
                  </div>
                </div>
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
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- LINKS QUE SE REQUIERAN-->
    <script src="../js/ordenTrabajo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>