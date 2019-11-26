<?php
  include("../controlador/cFoda.php");
?>    
    <div class="form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name" style="text-align: left">Estrategias DA<span class="required">*</span></label> 
    </div>
    <div class="form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <textarea  class="form-control" style="resize: none" id="eDA"></textarea>
        </div> 
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tD1">
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
		                        <input type="checkbox" name="checkDebilidad1" id="checkDebilidad1" class="flat" style="margin-left: 18px;" value="<?php echo $datosDebilidad[$i][0]?>">              
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
                <table class="table table-striped jambo_table bulk_action" id="tA1">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">Nro </th>
                            <th class="column-title">Amenazas </th>                         
                            <th class="column-title no-link last"><span class="nobr">Accion</span></th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $cont = 1;
                      if($datosAmenaza){
                        for($i=0;$i<count($datosAmenaza);$i++){
                    ?>
	                    <tr class="even pointer">
	                        <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $cont?></td>
	                        <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $datosAmenaza[$i][1]?></td>
	                        <td class="a-right a-right" style="vertical-align: middle;padding-top: 2px;padding-bottom: 2px;">
	                            <input type="checkbox" name="checkAmenaza1" id="checkAmenaza1" class="flat" style="margin-left: 18px;" value="<?php echo $datosAmenaza[$i][0]?>">              
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
            <button class="btn btn-success" type="button" id="registrarDA" onclick="registrarEDA()"><i class="fa fa-save"></i> Registrar</button>
            <button class="btn btn-success" type="button" id="actualizarDA" onclick="actualizarEDA()" style="display:none;"><i class="fa fa-save"></i> Actualizar</button>
        </div>
    </div>
    <div class="form-group">                         
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive" id="idEda">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title" width="10px">Nro </th>
                            <th class="column-title" width="800px">Estrategia DA </th>                      
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
                      if($datosEstrategiaDA){
                        for($i=0;$i<count($datosEstrategiaDA);$i++){
                    ?>
                        <tr class="even pointer" idEstrategiaDA="<?php echo $datosEstrategiaDA[$i][0]?>">
                            <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $cont?></td>
                            <td class=" " style="vertical-align: middle;padding-top: 1px;"><?php echo $datosEstrategiaDA[$i][1]?></td>
                            <td class="a-right a-right " style="vertical-align: middle; padding-top: 1px;">
                                        <button type="button" class="btn btn-primary editarDA"><i class="fa fa-pencil"></i> Editar</button>              
                            </td>  
                            <td class="a-right a-right " style="vertical-align: middle; padding-top: 1px;">
                                        <button class="btn btn-danger eliminarDA" type="button"><i class="fa fa-trash"></i> Eliminar</button> 
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