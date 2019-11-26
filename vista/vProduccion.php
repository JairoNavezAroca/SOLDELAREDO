<?php
  include("../header1.php"); 
  include("../controlador/cProduccion.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>PRODUCCION</h2>                  
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="nroOrden" placeholder="NUMERO">
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12 has-feedback">
                      <label class="control-label" for="first-name" style="text-align:rigth;">Fecha: </label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="date" class="form-control col-md-3 col-sm-3 col-xs-12" id="fecha" placeholder="FECHA">
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <label class="control-label" for="first-name" style="text-align:rigth;">Fecha Almacen: </label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="date" class="form-control" id="fechaAlmacen" placeholder="FECHA ALMACEN">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 has-feedback">
                      <select class="select2_single form-control" tabindex="-1" name="" id="idProducto">
                        <option value="">Seleccione Producto</option>
                        <?php
                          if($datosProducto){
                            for ($i=0; $i < count($datosProducto); $i++) { 
                        ?>
                            <option value="<?php echo $datosProducto[$i][0]?>"><?php echo $datosProducto[$i][1]?></option>
                          
                        <?php
                            }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="cantidad" placeholder="CANTIDAD">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="labor" placeholder="LABOR">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="area" placeholder="AREA">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="especificaciones" placeholder="ESPECIFICACIONES">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 has-feedback">
                      <button type="reset" class="btn btn-secondary"><i class="fa fa-paint-brush"></i> Limpiar</button>
                      <button type="button" class="btn btn-success" onclick="registrarProduccion()"><i class="fa fa-save"></i> Registrar</button>
                    </div>
                  </div>
                </form>
                <br />
                <h4> LISTAR PRODUCCIONES</h4>
                <div class="table-responsive" id="tablaProduccion">
                    
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
    <script src="../js/produccion.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>