<?php
  include("../controlador/cFoda.php");
?>
<div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" style="text-align: left">Estrategias DO<span class="required">*</span></label> 
    </div>
    <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea  class="form-control" style="resize: none" id="eDO"></textarea>
        </div> 
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tD">
                    <thead>
                        <tr class="headings">
                            <th class="column-title" >Nro </th>
                            <th class="column-title">Debilidades </th>                         
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
		                <tr class="even pointer">
		                    <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $cont?></td>
		                    <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $datosDebilidad[$i][1]?></td>
		                    <td class="a-right a-right" style="vertical-align: middle;padding-top: 2px;padding-bottom: 2px;">
		                        <input type="checkbox" name="checkDebilidad" id="checkDebilidad" class="flat" style="margin-left: 18px;" value="<?php echo $datosDebilidad[$i][0]?>">              
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
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tO1">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">Nro </th>
                            <th class="column-title">Oportunidades </th>                         
                            <th class="column-title no-link last"><span class="nobr">Accion</span></th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $cont = 1;
                      if($datosOportunidad){
                        for($i=0;$i<count($datosOportunidad);$i++){
                    ?>
	                    <tr class="even pointer">
	                        <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $cont?></td>
	                        <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $datosOportunidad[$i][1]?></td>
	                        <td class="a-right a-right" style="vertical-align: middle;padding-top: 2px;padding-bottom: 2px;">
	                            <input type="checkbox" name="checkOportunidad1" id="checkOportunidad1" class="flat" style="margin-left: 18px;" value="<?php echo $datosOportunidad[$i][0]?>">              
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
    <div class="form-group">
        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-5">
            <button class="btn btn-success" type="button" id="registrarDO" onclick="registrarEDO()"><i class="fa fa-save"></i> Registrar</button>
            <button class="btn btn-success" type="button" id="actualizarDO" onclick="actualizarEDO()" style="display:none;"><i class="fa fa-save"></i> Actualizar</button>
        </div>
    </div>
    <div class="form-group">                         
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive" id="idEdo">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title" width="10px">Nro </th>
                            <th class="column-title" width="800px">Estrategia DO </th>                      
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
                      if($datosEstrategiaDO){
                        for($i=0;$i<count($datosEstrategiaDO);$i++){
                    ?>
                        <tr class="even pointer" idEstrategiaDO="<?php echo $datosEstrategiaDO[$i][0]?>">
                            <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $cont?></td>
                            <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $datosEstrategiaDO[$i][1]?></td>
                            <td class="a-right a-right " style="vertical-align: middle; padding-top: 1px;">
                                        <button type="button" class="btn btn-primary editarDO"><i class="fa fa-pencil"></i> Editar</button>              
                            </td>  
                            <td class="a-right a-right " style="vertical-align: middle; padding-top: 1px;">
                                <button class="btn btn-danger eliminarDO" type="button"><i class="fa fa-trash"></i> Eliminar</button> 
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