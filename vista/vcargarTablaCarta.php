<?php
  include("../controlador/cCartaAceptacion.php");
?>
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title"> Nro</th>
                          <th class="column-title"> Area</th>
                          <th class="column-title"> Tipo</th>
                          <th class="column-title"> Titulo</th>
                          <th class="column-title"> Fecha</th>
                          <th class="column-title"> Proyecto</th>
                          <th class="column-title"> Descripcion</th>
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
                        if($datosCarta){
                          for($i=0;$i<count($datosCarta);$i++){
                            $idProyecto=$datosCarta[$i][6];
                            $sql="SELECT proyecto FROM proyecto WHERE idProyecto='$idProyecto';";
                            $proyecto=$carta->query1($sql);
                      ?>
                        <tr class="even pointer" idCarta="<?php echo $datosCarta[$i][0]?>">
                          <td class="a-right a-right"><?php echo $cont?></td>
                          <td class=""><?php echo $datosCarta[$i][1]?></td>
                          <td class=""><?php echo $datosCarta[$i][3]?></td>
                          <td class=""><?php echo $datosCarta[$i][5]?></td>
                          <td class=""><?php echo $datosCarta[$i][4]?></td>
                          <td class=""><?php echo $proyecto[0][0]?></td>
                          <td class=""><?php echo $datosCarta[$i][2]?></td>
                          <td class="">
                            <button type="button" class="btn btn-info detalleCarta"><i class="fa fa-eye"></i></button>
                          </td>
                          <td class="">
                            <button type="button" class="btn btn-danger eliminarCarta"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                          $cont++;
                        }
                      }
                      ?>
                      </tbody>
                    </table>