<?php
  include("../controlador/cPedido.php");
?>                     
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Orden</th>
                          <th class="column-title"> Fecha</th>
                          <th class="column-title"> Fecha Almacenaje</th>
                          <th class="column-title"> Area</th>
                          <th class="column-title no-link last"> Insumos</th>
                          <th class="column-title no-link last"> Detalle</th>
                          <th class="column-title no-link last"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $cont = 1;
                        if($datosPedido){
                          for($i=0;$i<count($datosPedido);$i++){
                      ?>
                        <tr class="even pointer" numero="<?php echo $datosPedido[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datosPedido[$i][0]?></td>
                          <td class=""><?php echo $datosPedido[$i][1]?></td>
                          <td class=""><?php echo $datosPedido[$i][2]?></td>
                          <td class=""><?php echo $datosPedido[$i][3]?></td>
                          <td class="">
                            <button type="button" class="btn btn-primary agregarInsumos"><i class="fa fa-plus"></i></button>
                          </td>
                          <td class="">
                            <button type="button" class="btn btn-info detallePedido"><i class="fa fa-eye"></i></button>
                          </td>
                          <td class="">
                            <button class="btn btn-danger eliminarPedido" type="button"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                            $cont++;
                          }
                        }
                      ?> 
                      </tbody>
                    </table>