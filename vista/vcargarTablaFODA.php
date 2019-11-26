<?php
  include("../controlador/cFoda.php");
?>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th class="column-title"> Nro</th>
                        <th class="column-title"> Año</th>
                        <th class="column-title no-link last"> Elementos</th>
                        <th class="column-title no-link last"> Estrategias</th>
                        <th class="column-title no-link last"> FODA</th>
                        <th class="column-title no-link last"> Eliminar</th>
                        <th class="bulk-actions" colspan="7">
                          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $cont = 1;
                      if($datosFODA){
                        for($i=0;$i<count($datosFODA);$i++){
                    ?>
                      <tr class="even pointer" idFoda="<?php echo $datosFODA[$i][0]?>">
                        <td class="a-right a-right"><?php echo $cont?></td>
                        <td class=""><?php echo $datosFODA[$i][1]?></td>
                        <td class="">
                          <button type="button" class="btn btn-primary agregarElementos"><i class="fa fa-plus"></i></button>
                        </td>
                        <td class="">
                         <button type="button" class="btn btn-primary agregarEstrategias"><i class="fa fa-plus"></i></button>
                        </td>
                        <td class="">
                          <button type="button" class="btn btn-info detalleFODA"><i class="fa fa-eye"></i></button>
                        </td>
                        <td class="">
                          <button type="button" class="btn btn-danger eliminarFODA"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                    <?php
                          $cont++;
                        }
                      }
                    ?>
                    </tbody>
                </table>