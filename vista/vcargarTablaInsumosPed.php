<?php
  include("../controlador/cPedido.php");
?>  
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Codigo</th>
                          <th class="column-title"> Insumo</th>
                          <th class="column-title"> Cantidad</th>
                          <th class="column-title"> Precio</th>
                          <th class="column-title no-link last"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $cont = 1;
                        if($datosInsumoPed){
                          for($i=0;$i<count($datosInsumoPed);$i++){
                      ?>
                        <tr class="even pointer" codInsumo="<?php echo $datosInsumoPed[$i][1]?>" numero="<?php echo $datosInsumoPed[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datosInsumoPed[$i][1]?></td>
                          <td class=""><?php echo $datosInsumoPed[$i][4]?></td>
                          <td class=""><?php echo $datosInsumoPed[$i][5]?></td>
                          <td class=""><?php echo $datosInsumoPed[$i][2]?></td>
                          <td class="">
                            <button class="btn btn-danger eliminarInsumoPed" type="button"><i class="fa fa-trash"></i></button>
                        </tr>
                      <?php
                            $cont++;
                          }
                        }
                      ?> 
                      </tbody>
                    </table>