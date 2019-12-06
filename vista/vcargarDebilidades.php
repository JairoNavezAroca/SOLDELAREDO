<?php
  include("../controlador/cFoda.php");
?>   
    <div class="form-group">
      <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Debilidades</label> 
    </div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <input class="date-picker form-control col-md-7 col-xs-12" onkeypress="return soloLetras(event)" required="required" type="text" id="debilidad">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <button class="btn btn-success" type="button" id="registrarDebilidad" onclick="registrarDeb()"><i class="fa fa-save"></i> Registrar</button>
            <button class="btn btn-success" type="button" id="actualizarDebilidad" onclick="actualizarDeb()" style="display:none;"><i class="fa fa-save"></i> Actualizar</button>
        </div>
    </div>
    <div class="form-group" >                         
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tablaDebilidad">
                    <thead>
                        <tr class="headings">
                            <th class="column-title" width="50px">Nro </th>
                            <th class="column-title" width="800px">Debilidad </th>                         
                            <th class="column-title no-link last"><span class="nobr">Accion</span></th>
                            <th class="column-title no-link last"><span class="nobr">Accion</span></th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $cont = 1;
                      if($datosDebilidad){
                        for($i=0;$i<count($datosDebilidad);$i++){
                    ?>
                        <tr class="even pointer" idDebilidad="<?php echo $datosDebilidad[$i][0]?>">
                            <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $cont?></td>
                            <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $datosDebilidad[$i][1]?></td>
                            <td class="a-right a-right " style="vertical-align: middle; padding-top: 1px;">
                                <button type="button" class="btn btn-primary editarDebilidad"><i class="fa fa-pencil"></i> Editar</button>                 
                            </td> 
                            <td class="a-right a-right " style="vertical-align: middle; padding-top: 1px;">
                                <button class="btn btn-danger eliminarDebilidad" type="button"><i class="fa fa-trash"></i> Eliminar</button> 
                            </td>                     
                        </tr>  
                    <?php
                          $cont++;
                        }
                      }
                    ?>                   
                    </tbody>
                </table>
            </div>  
        </div>  
  </div>