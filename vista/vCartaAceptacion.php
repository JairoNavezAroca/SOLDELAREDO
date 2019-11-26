<?php
  include("../header1.php"); 
  include("../controlador/cCartaAceptacion.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>CARTA DE ACEPTACIÓN</h2>                  
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="area" placeholder="AREA">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="tipo" placeholder="TIPO">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="titulo" placeholder="TITULO">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="descripcion" placeholder="DESCRIPCION">
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 has-feedback" id="selectProy">
                      <select class="select2_single form-control" tabindex="-1" name="" id="idProyecto">
                          <option value="">Seleccione Proyecto</option>
                      <?php
                          if($datosProy){
                              for ($i=0; $i < count($datosProy); $i++) { 
                      ?>
                          <option value="<?php echo $datosProy[$i][0]?>"><?php echo $datosProy[$i][1]?></option>
                        
                      <?php
                              }
                          }
                      ?>
                      </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 has-feedback">
                      <input type="date" class="form-control" id="annio" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 has-feedback">
                      <button type="reset" class="btn btn-secondary"><i class="fa fa-paint-brush"></i> Limpiar</button>
                      <button type="button" class="btn btn-success" onclick="registrarCarta()"><i class="fa fa-save"></i> Registrar</button>
                    </div>
                  </div>
                </form>
                <h4>LISTA DE CARTAS</h4>
                <div class="table-responsive" id="tablaCartas">
                    
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
            <script src="../js/cartaAceptacion.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <!------------------------------------->
          </body>
        </html>