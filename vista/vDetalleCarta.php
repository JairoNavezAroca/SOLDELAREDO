<?php
  include("../header1.php"); 
  include("../controlador/cCartaAceptacion.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <div class="col-md-10 col-sm-5 col-xs-12 has-feedback">               
                  <h2>REPORTE DE CARTA</h2>
                </div>
                <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                  <button type="button" class="btn btn-primary detalleOrden" onclick="Export2Doc('imprimir', 'Carta');"><i class="fa fa-file-word-o"></i> Word</button>
                </div> 
                <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                  <button type="button" class="btn btn-danger" onclick="window.location.href='pdfCarta.php?idCarta=<?php echo $_GET['idCarta']?>'"><i class="fa  fa-file-pdf-o"></i> PDF</button>
                </div> 
                <div class="clearfix"></div>
              </div>
              <div class="x_content" id="imprimir">
                <h2 style="text-align: center">SOLICITUD DE <font style="text-transform: uppercase;"><?php echo $datosCartaUnico[0][2]?></font></h2>             
                <div >
                  FECHA: <?php echo $datosCartaUnico[0][4]?><br>
                  AREA:<?php echo $datosCartaUnico[0][1]?><br>
                  TIPO:<?php echo $datosCartaUnico[0][3]?><br>
                  PROPOSITO:<?php echo $datosCartaUnico[0][2]?><br>
                  PROYECTO:<?php echo $datosProy[0][1]?>
                </div><br>
                <div>
                  <p style="font-size: 15px">
                    Estimado Sr.<br>
                    Por medio de la presente carta me dirijo a usted con el fin de tratar el proyecto "<?php echo $datosProy[0][1]?>" que tiene como proposito <?php echo $datosCartaUnico[0][2]?> siendo de caracter <?php echo $datosCartaUnico[0][3]?>.<br>

                    En este sentido, adjunto frente a esta solicitud los datos necesarios para su respuesta.<br>

                    Sin más que agregar, gracias por su atención.<br>
                    Saludos Cordiales<br>

                    Atentamente
                    <?php echo $datosCartaUnico[0][1]?>
                  </p>
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