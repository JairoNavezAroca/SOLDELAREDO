<?php  
  include("../controlador/cPlanAnual.php");
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
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
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once '../vendor/autoload.php';
//https://mpdf.github.io/installation-setup/installation-v7-x.html
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('reportePTA.pdf',"D");
?>
