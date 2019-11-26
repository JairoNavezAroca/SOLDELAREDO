<?php
  include("../controlador/cOrdenTrabajo.php");
?>
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title" width="40px"> Nro</th>
                          <th class="column-title" width="100px"> Orden</th>
                          <th class="column-title" width="400px"> Area</th>
                          <th class="column-title" width="200px"> Fecha</th>
                          <th class="column-title no-link last" width="100px"> Actividades</th>
                          <th class="column-title no-link last" width="100px"> Detalles</th>
                          <th class="column-title no-link last" width="100px"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $cont = 1;
                        if($datosOrden){
                          for($i=0;$i<count($datosOrden);$i++){
                      ?>

                        <tr class="even pointer" idOrdenTrabajo="<?php echo $datosOrden[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datosOrden[$i][0]?></td>
                          <td class=""><?php echo $datosOrden[$i][1]?></td>
                          <td class=""><?php echo $datosOrden[$i][2]?></td>
                          <td class="">
                            <button type="button" class="btn btn-primary agregarElementos" ><i class="fa fa-plus"></i></button>
                          </td>
                          <td class="">
                            <button type="button" class="btn btn-info detalleOrden"><i class="fa fa-eye"></i></button>

                          </td>
                          <td class="">
                            <button type="button" class="btn btn-danger eliminarOrden"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                            $cont++;
                          }
                        }
                      ?>
                      </tbody>
                    </table>