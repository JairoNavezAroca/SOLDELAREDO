<?php
    include("../controlador/cFoda.php");
?>            
  <table id="datatable" class="table table-striped table-bordered" >
                        <tbody>
                          <tr>
                            <td class="col-md-4 col-sm-4 col-xs-12" style="border-color: black;border:solid;">Empresa</td>
                            <td class="col-md-4 col-sm-4 col-xs-12" style="border-color: black;border:solid;">Oportunidades</td>
                            <td class="col-md-4 col-sm-4 col-xs-12" style="border-color: black;border:solid;">Amenazas</td> 
                          </tr>
                          <tr>
                            <td style="border-color: black;border:solid;"><b>MATRIZ FODA 
                            	SOL DE LAREDO
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                    if($datosOportunidad){
                                        for ($i=0; $i <count($datosOportunidad) ; $i++) { 
                                ?>
                                <li>
                                  <label class="flat">O<?php echo $datosOportunidad[$i][0].'. '.$datosOportunidad[$i][1]?></label>
                                </li>
                                <?php
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                	if($datosAmenaza){
                                        for ($i=0; $i <count($datosAmenaza) ; $i++) {
                                ?>
                                <li>
                                  <label class="flat">A<?php echo $datosAmenaza[$i][0].'. '.$datosAmenaza[$i][1]?></label>
                                </li>
                                <?php
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td style="border-color: black;border:solid;">Fortalezas</td>
                            <td style="border-color: black;border:solid;">Estrategias FO</td>
                            <td style="border-color: black;border:solid;">Estrategias FA</td>
                          </tr>
                          <tr>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                	if($datosFortaleza){
                                        for ($i=0; $i <count($datosFortaleza) ; $i++) {
                                ?>
                                <li>
                                  <label class="flat">F<?php echo $datosFortaleza[$i][0].'. '.$datosFortaleza[$i][1]?></label>
                                </li>
                                <?php
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                 	$cadena="";
                                    if($datosEstrategiaFO){
                                        for ($i=0; $i <count($datosEstrategiaFO) ; $i++) {
                                            $ID=$datosEstrategiaFO[$i][0];
                                            $sql="SELECT idFortaleza FROM EFOF WHERE idEstrategiaFO='$ID';";
                                            $datos=$foda->query1($sql);
                                		    for ($j=0; $j <count($datos) ; $j++) { 
                                			    if (($j+1)==count($datos)) {
                                				    $cadena=$cadena.'F'.$datos[$j][0].' y ';
                                			    }
                                			    else{
                                				    $cadena=$cadena.'F'.$datos[$j][0].',';
                                			    }
                                		    }
                                            $sql="SELECT idOportunidad from EFOO where idEstrategiaFO='$ID'";
                                            $datos=$foda->query1($sql);
                                            $cont=1;
                                            for ($j=0; $j <count($datos) ; $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'O'.$datos[$j][0];
                                                }
                                                else{
                                                    $cadena=$cadena.'O'.$datos[$j][0].',';
                                                }
                                                $cont=$cont+1;
                                            }
                                ?>
                                <li>
                                  <label class="flat">FO<?php echo $datosEstrategiaFO[$i][0].'.'.$datosEstrategiaFO[$i][1].'. ('.$cadena.')'?></label>
                                </li>
                                <?php
                                	        $cadena="";
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                	$cadena="";
                                	if($datosEstrategiaFA){
                                        for ($i=0; $i <count($datosEstrategiaFA) ; $i++) {
                                            $ID=$datosEstrategiaFA[$i][0];
                                            $sql="SELECT idFortaleza from EFAF where idEstrategiaFA='$ID';";
                                            $datos=$foda->query1($sql);
                                            for ($j=0; $j <count($datos) ; $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'F'.$datos[$j][0].' y ';
                                                }
                                                else{
                                                    $cadena=$cadena.'F'.$datos[$j][0].',';
                                                }
                                            }
                                            $sql="SELECT idAmenaza from EAFA where idEstrategiaFA='$ID';";
                                            $datos=$foda->query1($sql);
                                            for ($j=0; $j < count($datos) ; $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'A'.$datos[$j][0];
                                                }
                                                else{
                                                    $cadena=$cadena.'A'.$datos[$j][0].',';
                                                }
                                		    }
                                ?>
                                <li>
                                  <label class="flat">FA<?php echo $datosEstrategiaFA[$i][0].'.'.$datosEstrategiaFA[$i][1].'. ('.$cadena.')'?></label>
                                </li>
                                <?php
                                	        $cadena="";
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td style="border-color: black;border:solid;">Debilidades</td>
                            <td style="border-color: black;border:solid;">Estrategias DO</td>
                            <td style="border-color: black;border:solid;">Estrategias DA</td>
                          </tr>
                          <tr>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                	if($datosDebilidad){
                                        for ($i=0; $i <count($datosDebilidad) ; $i++) {
                                ?>
                                <li>
                                  <label class="flat">D<?php echo $datosDebilidad[$i][0].'.'.$datosDebilidad[$i][1]?></label>
                                </li>
                                <?php
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                	$cadena="";
                                	if($datosEstrategiaDO){
                                        for ($i=0; $i <count($datosEstrategiaDO) ; $i++) {
                                            $ID=$datosEstrategiaDO[$i][0];
                                            $ql="SELECT idDebilidad from EDOD where idEstrategiaDO='$ID';";
                                            $datos=$foda->query1($sql);
                                            for ($j=0; $j < count($datos); $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'D'.$datos[$j][0].' y ';
                                                }
                                                else{
                                                    $cadena=$cadena.'D'.$datos[$j][0].',';
                                                }
                                            }
                                            $sql="SELECT idOportunidad from EDOO where idEstrategiaDO='$ID';";
                                            $datos=$foda->query1($sql);
                                            for ($j=0; $j <count($datos) ; $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'O'.$datos[$j][0];
                                                }
                                                else{
                                                    $cadena=$cadena.'O'.$datos[$j][0].',';
                                                }
                                            }
                                ?>
                                <li>
                                  <label class="flat">DO<?php echo $datosEstrategiaDO[$i][0].'.'.$datosEstrategiaDO[$i][1].'. ('.$cadena.')'?></label>
                                </li>
                                <?php
                                	        $cadena="";
                                        }
                                    }
                                ?>
                              </ul>
                            </td>
                            <td style="border-color: black;border:solid;">
                              <ul class="to_do">
                                <?php 
                                    $cadena="";
                                	if($datosEstrategiaDA){
                                        for ($i=0; $i <count($datosEstrategiaDA) ; $i++) {
                                            $ID=$datosEstrategiaDA[$i][0];
                                            $sql="SELECT idDebilidad from EDAD where idEstrategiaDA='$ID';";
                                            $datos=$foda->query1($sql);
                                            for ($j=0; $j < count($datos) ; $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'D'.$datos[$j][0].' y ';
                                                }
                                                else{
                                                    $cadena=$cadena.'D'.$datos[$j][0].',';
                                                }
                                            }
                                            $sql="SELECT idAmenaza from EDAA where idEstrategiaDA='$ID';";
                                            $datos=$foda->query1($sql);
                                            for ($j=0; $j < count($datos) ; $j++) { 
                                                if (($j+1)==count($datos)) {
                                                    $cadena=$cadena.'A'.$datos[$j][0];
                                                }
                                                else{
                                                    $cadena=$cadena.'A'.$datos[$j][0].',';
                                                }
                                            }
                                ?>
                                    <li>
                                        <label class="flat">DA<?php echo $datosEstrategiaDA[$i][0].'.'.$datosEstrategiaDA[$i][1].'. ('.$cadena.')'?></label>
                                    </li>
                                <?php
                                            $cadena="";
                                        }
                                    }
                                ?>
                    </ul>
                </td>
            </tr>
        </tbody>
  </table>