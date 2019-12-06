<?php  
  include("../controlador/cCartaAceptacion.php");
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
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
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
require_once '../vendor/autoload.php';
//https://mpdf.github.io/installation-setup/installation-v7-x.html
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('reporteCarta.pdf',"D");
?>
