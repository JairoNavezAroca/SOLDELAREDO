<?php
  include("../header1.php"); 
  include("consultas.php");
  $areas=ListarAreas();
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<!-- ijncdnifnrifnijfn-->
            <div class="panel panel-default">
			  <div class="panel-body" align="center">
			    <u><h4>CRONOGRAMA DE CAPACITACIÓN</h4></u>
			  </div>
			  <div class="panel-footer">
				 <table class="table table-bordered">
					  <thead >
					    <!-------------------------------------------------->
					 <!-------------------------------------------------->
					    <tr class="success"><!--Tr FILA -->
					      <!-- THEAD ENCIERRA A  TD,TD ENCABEZADO -->
					      <!--TD COLUMNA -->
					        <td>AREA</td>
					        <td>DESCRIPCIÓN DE CAPACITACION</td>
					        <td>EMPRESA O CAPACITADOR</td>
					        <td>FECHA</td>
					  
					    </tr>
					   <!--Tr FILA -->
					      <!-- THEAD ENCIERRA A  TD,TD ENCABEZADO -->
					      <!--TD COLUMNA -->
					   <!-------------------------------------------------->
					   <?php 
					      for ($j=0; $j <sizeof(ListarAreas()) ; $j++) { 
					          $idarea=$areas[$j][0];
					          $capacitaciones=ListarCapacitaciones($idarea);
					        ?>
					        <tr>
					            <td rowspan="<?php echo(sizeof(ListarCapacitaciones($idarea)))+1 ?> " class="success">
					              <!--LISTAR PROCESOS -->
					              <?php echo $areas[$j][1] ?>
					            </td>
					            <!--LISTAR SUBPROCESOS -->
					              <?php
					              for ($m=0; $m <sizeof(ListarCapacitaciones($idarea)) ; $m++) { 
					               ?>
					               <!--NUEVA FILA -->
					               <tr>
					                <!--COLUMNA DE SUBPROCESOS -->
					                 <td>
					                   <?php
					    
					                    echo  $capacitaciones[$m][2];
					                   ?>
					                 </td>
					                 <td>
					                 	<?php
					    
					                    echo  $capacitaciones[$m][3];
					                   ?>
					                 </td>
					                 <td>
					                 	<?php
					    
					                    echo  $capacitaciones[$m][4];
					                   ?>
					                 </td>
					         
					               </tr>
					               <?php
					              }
					              ?>
					            
					        </tr>
					        
					    <?php }
					   ?>
					  </thead>
					  <tbody>
					  </tbody>
					</table>
					 <a href="ExportarCapacitaciones.php?Word" class="btn btn-warning">EXPORTAR</a> 
					 <a href="ExportarCapacitaciones.php?PDF" class="btn btn-warning">EXPORTAR</a> 
			  </div>
			</div>
			<!-- ijncdnifnrifnijfn-->
          </div>
        </div>
       
        <!-- /page content -->
<?php
  include("../footer1.php");
?>