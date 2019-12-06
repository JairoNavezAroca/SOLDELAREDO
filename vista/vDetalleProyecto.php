<?php
  include("../header1.php");
  include("../controlador/cProyecto.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <div class="col-md-10 col-sm-5 col-xs-12 has-feedback">               
                    <h2>REPORTE DE PROYECTO</h2>
                  </div>
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-primary" onclick="Export2Doc('imprimir', 'Proyecto');"><i class="fa fa-file-word-o"></i> Word</button>
                  </div> 
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-danger" onclick="generar()"><i class="fa  fa-file-pdf-o"></i> PDF</button>
                  </div>                 
                <div class="clearfix"></div>
              </div>
              <div class="x_content" id="imprimir">
                <h3 align="center">Proyecto: <?php echo $datosProyUnico[0][1]?></h3>
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                          <th class="column-title" width="40px" style="border-color: black;border:solid;"> N°</th>
                          <th class="column-title" width="100px" style="border-color: black;border:solid;"> DURACION</th>
                          <th class="column-title" width="400px" style="border-color: black;border:solid;"> ACTIVIDAD</th>
                          <th class="column-title" width="200px" style="border-color: black;border:solid;"> SUB-TAREAS</th>
                          <th class="column-title" width="200px" style="border-color: black;border:solid;"> RESPONSABLE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $cont=1;
                          ?>
                          <td class="" style="border-color: black;border:solid;">
                          <?php for ($i=0; $i < count($datosActividadProy); $i++) { 
                            echo $cont."<br/>";;  
                                  
                          $cont++;
                          } 
                        ?>
                          </td> 
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadProy); $i++) { 
                            echo "- ".$datosActividadProy[$i][2]."<br/>";
                          } 
                          ?></td>
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadProy); $i++) { 
                            echo "- ".$datosActividadProy[$i][1]."<br/>";
                          } 
                          ?></td>
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadProy); $i++) { 
                            echo "- ".$datosActividadProy[$i][4]."<br/>";
                          } 
                          ?></td>
                          <td class="" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadProy); $i++) { 
                            echo "- ".$datosActividadProy[$i][3]."<br/>";
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
    <script src="../js/proyecto.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>