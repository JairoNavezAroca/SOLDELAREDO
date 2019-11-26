<?php
  include("../header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>LISTAR PRODUCTOS</h2>                  
              <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="codigo" placeholder="CODIGO">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="producto" placeholder="PRODUCTO">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="precio" placeholder="PRECIO">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="cantidad" placeholder="CANTIDAD">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                      <button type="reset" class="btn btn-secondary col-md-4 col-sm-10 col-xs-12"><i class="fa fa-paint-brush"></i> Limpiar</button>
                      <button type="button" class="btn btn-success col-md-4 col-sm-10 col-xs-12" id="registrar" onclick="registrarProducto()"><i class="fa fa-save"></i> Registrar</button>
                      <button type="button" class="btn btn-success col-md-4 col-sm-10 col-xs-12" id=actualizar onclick="actualizarProducto()" style="display:none;"><i class="fa fa-save"></i> Actualizar</button>
                    </div>
                  </div>
                </form>
                <div class="table-responsive col-md-9 col-sm-4 col-xs-12 has-feedback" id="tablaProductos">
                    
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
    <script src="../js/producto.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>