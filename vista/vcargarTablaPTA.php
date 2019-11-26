<?php
  include("../controlador/cPlanAnual.php");
?>
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Plan</th>
                          <th class="column-title"> Objetivo</th>
                          <th class="column-title"> Meta</th>
                          <th class="column-title"> Año</th>
                          <th class="column-title no-link last"> Elementos</th>
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
                        if($datosPTA){
                          for($i=0;$i<count($datosPTA);$i++){
                      ?>
                        <tr class="even pointer" idPTA="<?php echo $datosPTA[$i][0]?>">
                          <td class=""><?php echo $cont?></td>
                          <td class=""><?php echo $datosPTA[$i][1]?></td>
                          <td class=""><?php echo $datosPTA[$i][2]?></td>
                          <td class=""><?php echo $datosPTA[$i][3]?></td>
                          <td class=""><?php echo $datosPTA[$i][4]?></td>
                          <td class="a-right a-right">
                            <button type="button" class="btn btn-primary agregarElementos"><i class="fa fa-plus"></i></button>
                          </td>
                          <td class="a-right a-right">
                            <button type="button" class="btn btn-info detallePTA"><i class="fa fa-eye"></i></button>
                          </td>
                          <td class="a-right a-right">
                            <button type="button" class="btn btn-danger eliminarPTA"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                            $cont++;
                          }
                        }
                      ?>
                      </tbody>
                    </table>