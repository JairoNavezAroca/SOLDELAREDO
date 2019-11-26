<?php
  include("../header1.php"); 
  include("../controlador/cOrdenTrabajo.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <div class="col-md-10 col-sm-5 col-xs-12 has-feedback">               
                    <h2>REPORTE DE PLAN DE ORDEN DE TRABAJO</h2>
                  </div>
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-primary" onclick="Export2Doc('imprimir', 'OTA');"><i class="fa fa-file-word-o"></i> Word</button>
                  </div> 
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-danger" onclick=""><i class="fa  fa-file-pdf-o"></i> PDF</button>
                  </div>
              </div>
              <div class="x_content" id="imprimir">
                 <h4 align="center">EMPRESA AGROINDUSTRIAL LAREDO S.A.A</h4>
                 <h5 align="center">Empresa dedicada al cultivo e industrialización de la caña de azucar</h5>
                 <div style="float: right;">
                    Nro Orden de Trabajo: <?php echo $datosOrdenUnico[0][0]?>
                 </div><br>
                 <div style="float: left;">Trabajo: Dirigida al Area de <?php echo $datosOrdenUnico[0][1]?></div><br><br>
                 <div>
                  <table class="table table-striped table-bordered">

                      <thead>
                        <tr class="headings" >
                          <th style="border-color: black;border:solid; text-align: center" width="40px"> DEPARTAMENTO</th>
                          <th  style="border-color: black;border:solid;text-align: center" width="100px"> FECHA</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="even pointer">
                          <td style="border-color: black;border:solid;text-align: center" class="a-right a-right">Orden emitida por el Area de Produccion</td>
                          <td style="border-color: black;border:solid;text-align: center" class=""><?php echo $datosOrdenUnico[0][2]?></td>
                        </tr>
                      </tbody>
                    </table>                    
                 </div>
                 <br />
                 <div>
                    <table class="table table-striped table-bordered">

                      <thead>
                        <tr class="headings" >
                          <th style="border-color: black;border:solid;text-align: center" width="40px"> CANTIDAD</th>
                          <th  style="border-color: black;border:solid;text-align: center" width="100px" > ACTIVIDADES</th>
                          <th  style="border-color: black;border:solid;text-align: center" width="100px"> IMPORTE UNITARIO</th>
                          <th  style="border-color: black;border:solid;text-align: center" width="100px"> IMPORTE TOTAL</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="even pointer">
                          <td style="border-color: black;border:solid;text-align: center" class="a-right a-right"><?php for ($i=0; $i < count($datosActividades); $i++) { 
                            echo $datosActividades[$i][1]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosActividades); $i++) { 
                            echo "- ".$datosActividades[$i][2]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosActividades); $i++) { 
                            echo $datosActividades[$i][3]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center" ><?php for ($i=0; $i < count($datosActividades); $i++) { 
                            echo $datosActividades[$i][3]*$datosActividades[$i][1]."<br/>";
                          } 
                          ?></td>
                        </tr>
                      </tbody>
                    </table>  
                 </div>
                
                   <table style="border: hidden" class="table  table-bordered">
                      <tbody style="border: hidden">
                      <tr>
                        <td style="border: hidden" width="50px"></td>
                        <td style="border: hidden" width="50px"></td>
                        <td style="border: hidden;text-align: right;" width="60px">Subtotal</td>
                        <?php
                          $res=0;
                          ?>
                          <td style="border: hidden;text-align: center" width="30px">
                          <?php for ($i=0; $i < count($datosActividades); $i++) {
                            $multi=$datosActividades[$i][3]*$datosActividades[$i][1]; 
                            $res=$multi+$res;
                          } ?>
                          <?php echo $res ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="border: hidden" width="50px" style="border-color: black;border:solid;"></td>
                        <td style="border: hidden" width="50px" style="border-color: black;border:solid;"></td>
                        <td style="border: hidden;text-align: right" width="60px" style="border-color: black;border:solid;">IVA(18%)</td>
                        <td style="border: hidden;text-align: center" width="60px" style="border-color: black;border:solid;"><?php echo $res*0.18 ?></td>
                      </tr>
                      <tr>
                        <td style="border: hidden" width="50px"></td>
                        <td style="border: hidden" width="50px"></td>
                        <td style="border: hidden;text-align: right" width="60px">TOTAL</td>
                        <td style="border: hidden;text-align: center" width="60px"><?php echo ($res*0.18)+$res?></td>
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
    <script src="..//js/ordenTrabajo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>