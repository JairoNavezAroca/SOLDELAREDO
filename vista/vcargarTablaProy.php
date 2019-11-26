<?php
  include("../controlador/cProyecto.php");
?>
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Proyecto</th>
                          <th class="column-title"> Inicio</th>
                          <th class="column-title"> Fin</th>
                          <th class="column-title no-link last"> Actividades</th>
                          <th class="column-title no-link last"> Detalles</th>
                          <th class="column-title no-link last"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $cont = 1;
                        if($datosProy){
                          for($i=0;$i<count($datosProy);$i++){
                      ?>
                        <tr class="even pointer" idProyecto="<?php echo $datosProy[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datosProy[$i][1]?></td>
                          <td class=""><?php echo $datosProy[$i][2]?></td>
                          <td class=""><?php echo $datosProy[$i][3]?></td>
                          <td class="">
                            <button type="button" class="btn btn-primary agregarEleProy"><i class="fa fa-plus"></i></button>
                          </td>
                          <td class="">
                            <button type="button" class="btn btn-info detalleProy"><i class="fa fa-eye"></i></button>
                          </td>
                          <td class="">
                            <button type="button" class="btn btn-danger eliminarProyecto"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                          $cont++;
                        }
                      }
                      ?>
                      </tbody>
                    </table>