<?php  
  include("../controlador/cProyecto.php");
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
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
                      <br />
                      <tbody>
                      <tr>
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
                          <td class="a-right a-right" style="border-color: black;border:solid;"><?php for ($i=0; $i < count($datosActividadProy); $i++) { 
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
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once '../vendor/autoload.php';
//https://mpdf.github.io/installation-setup/installation-v7-x.html
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('reporteProyecto.pdf',"D");
?>
