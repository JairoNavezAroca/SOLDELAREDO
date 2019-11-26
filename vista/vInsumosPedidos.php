<?php
  include("../header1.php"); 
  include("../controlador/cPedido.php");  
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="x_panel">
                <div class="x_title">
                  <h2>INSUMOS PARA LA COMPRA</h2>                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                      <div class="col-md-4 col-sm-4 col-xs-12 has-feedback">
                        <select class="select2_single form-control" tabindex="-1" name="" id="codInsumo">
                            <option value="">Seleccione Insumo</option>
                            <?php
                              if($datosInsumo){
                                for ($i=0; $i < count($datosInsumo); $i++) { 
                            ?>
                                <option value="<?php echo $datosInsumo[$i][0]?>"><?php echo $datosInsumo[$i][1]?></option>
                              
                            <?php
                                }
                              }
                            ?>
                        </select>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                        <input type="text" class="form-control" id="cantidadInsumo" placeholder="CANTIDAD">
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12 has-feedback">
                        <button type="button" class="btn btn-success" onclick="registrarInsPed()"><i class="fa fa-save"></i> Registrar</button>
                      </div>
                    </div>
                  </form>
                  <br />
                  <h4> LISTA DE INSUMOS</h4>
                  <div class="table-responsive" id="tablaInsumosPed">
                    
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
    <script src="../js/pedido.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>