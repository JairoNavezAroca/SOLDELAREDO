<?php
  include("../controlador/cProducto.php");
?>
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title" width="50px"> Nro</th>
                          <th class="column-title"> Codigo</th>
                          <th class="column-title"> Producto</th>
                          <th class="column-title"> Precio</th>
                          <th class="column-title"> Cantidad</th>
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
                        if($datos){
                          for($i=0;$i<count($datos);$i++){
                      ?>
                        <tr class="even pointer" codProducto="<?php echo $datos[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datos[$i][0]?></td>
                          <td class=""><?php echo $datos[$i][1]?></td>
                          <td class=""><?php echo $datos[$i][2]?></td>
                          <td class=""><?php echo $datos[$i][3]?></td>
                          <td class="">
                            <button type="button" class="btn btn-primary editar"><i class="fa fa-pencil"></i> Editar</button>
                          </td>
                          <td class="">
                            <button class="btn btn-danger eliminar" type="button"><i class="fa fa-trash"></i> Eliminar</button>
                          </td>
                        </tr>
                      <?php
                            $cont++;
                          }
                        }
                      ?>  
                      </tbody>
                    </table>