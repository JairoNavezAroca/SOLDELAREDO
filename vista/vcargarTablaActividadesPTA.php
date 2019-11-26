<?php
  include("../controlador/cPlanAnual.php");
?>                 
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Actividad</th>
                          <th class="column-title"> Responsable</th>
                          <th class="column-title"> Fecha</th>
                          <th class="column-title no-link last"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $cont=1;
                        if($datosActividadPTA){
                          for ($i=0; $i < count($datosActividadPTA) ; $i++) { 
                      ?>
                        <tr class="even pointer" idActividadPTA="<?php echo $datosActividadPTA[$i][0]?>">
                          <td class="a-right a-right" width="50px"><?php echo $cont?></td>
                          <td class=""><?php echo $datosActividadPTA[$i][1]?></td>
                          <td class=""><?php echo $datosActividadPTA[$i][2]?></td>
                          <td class=""><?php echo $datosActividadPTA[$i][3]?></td>
                          <td class="a-right a-right" width="100px">
                            <button type="button" class="btn btn-danger eliminarActividadPTA"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                            $cont++;
                          }
                        }
                      ?>
                      </tbody>
                    </table>