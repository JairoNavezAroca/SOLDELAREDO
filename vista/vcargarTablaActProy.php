<?php
  include("../controlador/cProyecto.php");
?>
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Actividad</th>
                          <th class="column-title"> Duracion</th>
                          <th class="column-title"> Equipo</th>
                          <th class="column-title"> Subtareas</th>
                          <th class="column-title no-link last"> Editar</th>
                          <th class="column-title no-link last"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $cont = 1;
                        if($datosActividadProy){
                          for($i=0;$i<count($datosActividadProy);$i++){
                      ?>
                        <tr class="even pointer" idActividadProy="<?php echo $datosActividadProy[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datosActividadProy[$i][1]?></td>
                          <td class=""><?php echo $datosActividadProy[$i][2]?></td>
                          <td class=""><?php echo $datosActividadProy[$i][3]?></td>
                          <td class=""><?php echo $datosActividadProy[$i][4]?></td>
                          <td class="">
                            <button type="button" class="btn btn-primary editarActProy"><i class="fa fa-pencil"></i></button>
                          </td>
                          <td class="">
                            <button type="button" class="btn btn-danger eliminarActProy"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                          $cont++;
                        }
                      }
                      ?>
                      </tbody>
                    </table>