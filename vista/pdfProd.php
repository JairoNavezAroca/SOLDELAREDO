<?php  
  include("../controlador/cProduccion.php");
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
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
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once '../vendor/autoload.php';
//https://mpdf.github.io/installation-setup/installation-v7-x.html
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('Produccion.pdf',"D");
?>
