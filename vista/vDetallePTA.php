<?php
  include("../header1.php");
  include("../controlador/cPlanAnual.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
        <div class="">
              <div class="x_panel">
                <div class="x_title">
                  <div class="col-md-10 col-sm-5 col-xs-12 has-feedback">               
                    <h2>REPORTE DE PLAN DE TRABAJO ANUAL</h2>
                  </div>
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-primary" onclick="Export2Doc('imprimir', 'PTA');"><i class="fa fa-file-word-o"></i> Word</button>
                  </div> 
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-danger" onclick=""><i class="fa  fa-file-pdf-o"></i> PDF</button>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" id="imprimir">
                    <h3 align="center"><?php echo $datosPTAUnico[0][1]?></h3>
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                          <th class="column-title" width="40px" style="border-color: black;border:solid;"> OBJETIVO</th>
                          <th class="column-title" width="100px" style="border-color: black;border:solid;"> META</th>
                          <th class="column-title" width="400px" style="border-color: black;border:solid;"> ACTIVIDADES</th>
                          <th class="column-title" width="200px" style="border-color: black;border:solid;"> RESPONSABLE</th>
                          <th class="column-title no-link last" width="100px" style="border-color: black;border:solid;"> CRONOGRAMA</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="even pointer">
                          <td class="a-right a-right" style="border-color: black;border:solid;"><?php echo $datosPTAUnico[0][2]?></td>
                          <td class="" style="border-color: black;border:solid;"><?php echo $datosPTA[0][3]?></td>
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadPTA); $i++) { 
                            echo "- ".$datosActividadPTA[$i][1]."<br/>";
                          } 
                          ?></td>
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadPTA); $i++) { 
                            echo "- ".$datosActividadPTA[$i][2]."<br/>";
                          } 
                          ?></td>
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadPTA); $i++) { 
                            echo "- ".$datosActividadPTA[$i][3]."<br/>";
                          } 
                          ?></td>
                        </tr>
                      </tbody>
                    </table>                
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
    <script src="../js/PTA.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>