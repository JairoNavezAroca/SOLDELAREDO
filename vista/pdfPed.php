<?php  
  include("../controlador/cPedido.php");
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="x_content" id="imprimir">
                <div style="float: left;margin-left: 200px"><h4>ORDEN DE PEDIDO</h4></div>
                <div style="float: right;">
                    Nº: <?php echo $datosPedido2[0][0]?>
                </div><br><br>
                <div style="float: left;">
                  Fecha de Expedicion de la Orden: <?php echo $datosPedido2[0][2]?><br><br>
                  <strong>Datos sobre el insumo a comprar:</strong><br>
                  - Lugar:<?php echo $datosPedido2[0][3]?><br>
                  - Proveedor:<?php echo $datosPedido2[0][1]?><br><br>
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
                            <?php for ($i=0; $i < count($datosInsumoPed); $i++) { 
                            echo $datosInsumoPed[$i][4]."<br/>";
                          } 
                          ?>
                          </td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosInsumoPed); $i++) { 
                            echo $datosInsumoPed[$i][6]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosInsumoPed); $i++) { 
                            echo $datosInsumoPed[$i][5]."<br/>";
                          } 
                          ?></td>
                          <td style="border-color: black;border:solid;text-align: center"><?php for ($i=0; $i < count($datosInsumoPed); $i++) { 
                            echo $datosInsumoPed[$i][6]*$datosInsumoPed[$i][5]."<br/>";
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
                            <?php for ($i=0; $i < count($datosInsumoPed); $i++) {
                              $multi=$datosInsumoPed[$i][6]*$datosInsumoPed[$i][5]; 
                              $res=$multi+$res;
                            } ?>
                            <?php echo $res ?>
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="border: hidden" style="border-color: black;border:solid;"></td>
                            <td style="border: hidden" style="border-color: black;border:solid;"></td>
                            <td style="border: hidden;text-align: right" width="200px" style="border-color: black;border:solid;">IGV(18%)</td>
                            <td style="border: hidden;text-align: left" width="100px" style="border-color: black;border:solid;"><?php echo $res*0.18 ?></td>
                          </tr>
                          <tr class="even pointer">
                            <td style="text-align: center;border: hidden"  class=""></td>
                            <td style="text-align: center;border: hidden" class=""></td>
                            <td style="text-align: right;border: hidden"   width="200px" class="">Costo Total</td>
                            <td style="text-align: left;border: hidden"   width="100px" class=""><?php echo ($res*0.18)+$res ?></td>
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
$mpdf->Output('OrdenPedido.pdf',"D");
?>
