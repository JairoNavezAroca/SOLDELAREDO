<?php
  include("../header1.php");
  include("../controlador/cProyecto.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          <div class="x_panel">
                <div class="x_title">
                  <h2>ACTIVIDADES PROYECTO</h2>                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form class="form-horizontal form-label-left input_mask">
                    <div class="form-group">
                        <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                            <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="descripcion" placeholder="ACTIVIDAD">
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                            <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="equipo" placeholder="AREA">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                            <input type="text" class="form-control" id="duracion" placeholder="TIEMPO">
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                            <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="subtareas" placeholder="SUBTAREAS">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 has-feedback">
                            <button type="reset" class="btn btn-secondary col-md-4 col-sm-10 col-xs-12"><i class="fa fa-paint-brush"></i> Limpiar</button>
                            <button type="button" class="btn btn-success col-md-4 col-sm-10 col-xs-12" onclick="registrarActProyecto()" id="registrar"><i class="fa fa-save"></i> Registrar</button>
                            <button type="button" class="btn btn-success col-md-4 col-sm-10 col-xs-12" onclick="actualizarActProyecto()" id="actualizar"><i class="fa fa-save"></i> Actualizar</button>
                        </div>
                    </div>
                  </form>
                  <br />
                  <h4>LISTA DE ACTIVIDADES</h4>
                  <div class="table-responsive" id="tablaActividades">
                    
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
            <script src="../js/proyecto.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
            <!------------------------------------->
          </body>
        </html>