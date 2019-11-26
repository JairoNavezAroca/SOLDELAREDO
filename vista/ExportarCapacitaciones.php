<?php 
	if (isset($_GET['Word'])){
		header("Content-type: application/vnd.ms-word");
		$hoy=date("Y-m-d");
		header("Content-Disposition: attachment; filename=Reporte$hoy.doc");
	}
	include("consultas.php");
	$areas=ListarAreas();
  	if (isset($_GET['PDF'])){
  		ob_start();
	}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<!-- ijncdnifnrifnijfn-->
            <div class="panel panel-default">
			  <div class="panel-body" align="center">
			    <u><h4>CRONOGRAMA DE CAPACITACIÓN</h4></u>
			  </div>
			  <div class="panel-footer" align="center">
				 <table border="1" cellpadding="0" cellspacing="0">
					  <thead >
					    <!-------------------------------------------------->
					 <!-------------------------------------------------->
					    <tr class="success" bgcolor="#33A8FF"><!--Tr FILA -->
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
					            <td rowspan="<?php echo(sizeof(ListarCapacitaciones($idarea)))+1 ?> " bgcolor="#33A8FF">
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
			  </div>
			</div>
			<!-- ijncdnifnrifnijfn-->
          </div>
        </div>
<?php 
  	if (isset($_GET['PDF'])){
		$html = ob_get_contents();
		ob_end_clean();
		require_once '../vendor/autoload.php';
		//https://mpdf.github.io/installation-setup/installation-v7-x.html
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML($html);
		$mpdf->Output('reporte.pdf',"D");
	}
?>