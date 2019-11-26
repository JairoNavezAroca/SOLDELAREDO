<?php
  include("../conexion.php");
  $idorden = isset($_GET['idorden']) ? $_GET['idorden'] : NULL;
  if(isset($_GET['idorden'])) {
        $query = "SELECT P.proceso as proceso, MP.idProceso as idproceso, OI.fecha as fecha, OI.propuesta as propuesta, OI.actividades as actividades, OI.nroDocumento as nrodocumento, OI.docRelacionados as docrelacionados, OI.observaciones as observaciones, OI.idOrden as idOrden, OI.DniPersonal as dnipersonal, OI.cargo as cargo FROM OrdenDeImplementacion OI JOIN MejoraProcesos MP on OI.idMejoraProceso=MP.idMejoraProceso JOIN Procesos P ON P.idProceso=MP.idProceso where idOrden='$idorden'";
        $rs_query =$conexion->query($query) ;
        $row=mysqli_fetch_row($rs_query);
      }
?>

                  <div id="page-content" hidden="">                      
                    <?php ob_start(); ?>
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                              <img width="90px" height="70px" src="../vendors/img/sol.png">
                        </div>
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          <address>
                                          <strong>Empresa agroindustrial Laredo S.A.A</strong>
                                          <br>Avenida Trujillo S/N Zona Industrial Laredo.
                                          <br>Ruc 20132377783
                                          <br>Email: www.agroindustriallaredo.com
                          </address>
                        </div>
                        <div class="col-sm-4 invoice-col">
                          <b>Orden ID:</b><?php echo $row[8];?>
                          <br>
                          <b>Fecha:</b><?php echo $row[2];?>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                      <div>
                        <br>Proceso: <?php echo $row[0];?>
                        <br>Responsable:<?php echo $row[9];?>
                        <br>Cargo: <?php echo $row[10];?>
                        <br>Propuesta:<?php echo $row[3];?>
                        <br>Actividades a realizar: <?php echo $row[4];?>
                        <br>Documentos relacionados: <?php echo $row[6];?>
                        <br>Observaciones: <?php echo $row[7];?>
                      </div>
                      
                        <?php $html = ob_get_contents(); ?>
                        <?php ob_end_clean(); ?>
                        <?php 
                        if (isset($_GET['Word']))
                          echo $html;
                        ?>
                </div>


<?php if (isset($_GET['word'])){ ?>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('#page-content').wordExport('Reporte');
    });
    setTimeout(function(){window.close();},1000);
  </script>
<?php } ?>
<?php 
  if (isset($_GET['pdf'])){
    require_once '../vendor/autoload.php';
    //https://mpdf.github.io/installation-setup/installation-v7-x.html
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $mpdf->Output('Reporte.pdf',"D");
  }
 ?>



