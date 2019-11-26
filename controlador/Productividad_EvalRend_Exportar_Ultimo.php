<script src="../vendors/_libreriasextra_/word/jquery.js.3.3.1.js"></script>
<script src="../vendors/_libreriasextra_/word/FileSaver.js"></script>
<script src="../vendors/_libreriasextra_/word/jquery.wordexport.js"></script>
<?php 
	require_once '../modelo/Productividad_Personal.php';
	require_once '../modelo/Productividad_EvRendimiento.php';
	require_once '../modelo/Productividad_DetalleEvRendimiento.php';
	if (isset($_GET['id']) && (isset($_GET['Word']) || isset($_GET['PDF']))) {
		echo 'Su reporte se está generando...';
		$er = EvRendimiento::find($_GET['id']);
		$der = DetalleEvRendimiento::where('IdEvRendimiento',$er->IdEvRendimiento)->where('Estado',true)->first();
		$e = Personal::find($er->DniPersonal);
	}
	else{
		echo 'Hubo un error, intente nuevamente';
		return;
	}
?>
<div id="page-content" hidden="">
	<?php ob_start(); ?>
	<div style="text-align: center;">
		Evaluacion de Rendimiento a: <?php echo "$e->apellido, $e->nombre" ?>
	</div>
	Fecha: <?php echo date_format(date_create($der->Fecha),'d-m-Y h:i:s a') ?>
	<br>
	Porcentaje de Eficiencia: <?php echo $der->Porcentaje ?>%
	<br>
	Observacion: 
	<br>
	<?php echo $der->Observacion ?>
	<?php $html = ob_get_contents(); ?>
	<?php ob_end_clean(); ?>
	<?php 
		if (isset($_GET['Word']))
			echo $html;
	 ?>
</div>
<?php if (isset($_GET['Word'])){ ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#page-content').wordExport('Reporte');
		});
//		setTimeout(function(){window.close();},1000);
	</script>
<?php } ?>
<?php 
	if (isset($_GET['PDF'])){
		require_once '../vendor/autoload.php';
		//https://mpdf.github.io/installation-setup/installation-v7-x.html
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML($html);
		$mpdf->Output('Reporte.pdf',"D");
	}
 ?>