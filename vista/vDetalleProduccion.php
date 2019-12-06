<?php
  include("../header1.php"); 
  include("../controlador/cProduccion.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">  
                <div class="col-md-10 col-sm-5 col-xs-12 has-feedback">               
                    <h2>REPORTE DE PRODUCCION</h2>
                  </div>
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-primary" onclick="Export2Doc('imprimir', 'Produccion');"><i class="fa fa-file-word-o"></i> Word</button>
                  </div> 
                  <div class="col-md-1 col-sm-2 col-xs-12 has-feedback">
                    <button type="button" class="btn btn-danger" onclick="generar()"><i class="fa  fa-file-pdf-o"></i> PDF</button>
                  </div>             
                <div class="clearfix"></div>
              </div>
              <div class="x_content" id="imprimir">
                <div style="float: left;margin-left: 300px"><h4>ORDEN DE PRODUCCION</h4></div>
                <div style="float: right;">
                    Nº: <?php echo $datosProduccion2[0][0]?>
                </div><br><br>
                <div style="float: left;">
                  Fecha de Expedicion de la Orden: <?php echo $datosProduccion2[0][2]?><br><br>
                  <strong>Datos sobre el producto a fabricar:</strong><br>
                 - Producto:  
                  <?php $var=$produccion->query1("SELECT product.descripcion FROM Produccion p INNER join Producto product on product.codProducto=p.codProducto where p.numero='$numero1'");?>
                  <?php echo $var[0][0]?><br>
                  - Cantidad:
                  <?php echo $datosProduccion2[0][4]?><br>
                  - Fecha Entrada a Almacen:<?php echo $datosProduccion2[0][3]?><br><br>
                </div>
                <div>
                  <table class="table table-striped table-bordered">

                      <thead>
                        <tr class="headings" >
                          <th colspan="4" style="border-color: black;border:solid;text-align: center" width="40px"> MATERIALES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="even pointer">
                          <td style="border-color: black;border:solid;text-align: center" class="">Insumo</td>
                          <td style="border-color: black;border:solid;text-align: center" class="">Cantidad</td>
                          <td style="border-color: black;border:solid;text-align: center" class="">Precio Unitario</td>
                          <td style="border-color: black;border:solid;text-align: center" class="">Total</td>
                        </tr>
                        <tr>
                          <td style="border-color: black;border:solid;text-align: center">
                            <?php for ($i=0; $i < count($datosInsumoProd); $i++) { 
                            echo $datosInsumoProd[$i][4]."<br/>";
                          } 
                          ?>
                          </td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosInsumoProd); $i++) { 
                            echo $datosInsumoProd[$i][6]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosInsumoProd); $i++) { 
                            echo $datosInsumoProd[$i][5]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosInsumoProd); $i++) { 
                            echo $datosInsumoProd[$i][6]*$datosInsumoProd[$i][5]."<br/>";
                            } 
                          ?>        
                          </td>
                        </tr>
                      </tbody>
                  </table> 

                  <table style="border: hidden" class="table  table-bordered">
                    <tbody style="border: hidden">
                          <tr class="even pointer">
                            <td style="text-align: center;border: hidden" class=""></td>
                            <td style="text-align: center;border: hidden"  class=""></td>
                            <td style="border: hidden;text-align: right"   width="200px" class="">Suma</td>
                            <?php
                            $res=0;
                            ?>
                            <td style="text-align: left;border: hidden"  width="100px" class="">
                            <?php for ($i=0; $i < count($datosInsumoProd); $i++) {
                              $multi=$datosInsumoProd[$i][6]*$datosInsumoProd[$i][5]; 
                              $res=$multi+$res;
                            } ?>
                            <?php echo $res ?>
                              
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td style="text-align: center;border: hidden"  class=""></td>
                            <td style="text-align: center;border: hidden" class=""></td>
                            <td style="text-align: right;border: hidden"   width="200px" class="">Costo Total</td>
                            <td style="text-align: left;border: hidden"   width="100px" class=""><?php echo  $datosProduccion2[0][6]+$res ?></td>
                          </tr>
                    </tbody>
                  </table>  

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