<script src="../vendors/_libreriasextra_/word/jquery.js.3.3.1.js"></script>
<script src="../vendors/_libreriasextra_/word/FileSaver.js"></script>
<script src="../vendors/_libreriasextra_/word/jquery.wordexport.js"></script>
<?php 
	require_once '../modelo/Productividad_PropMejora.php';
	require_once '../modelo/Productividad_DetallePropMejora.php';
	require_once '../modelo/Productividad_OrdenOptimizacion.php';
	require_once '../modelo/Productividad_DetalleOrdenOptimizacion.php';
	if ((isset($_GET['Word']) || isset($_GET['PDF']))) {
		echo 'Su reporte se está generando...';
		$oo = OrdenOptimizacion::all();
	}
	else{
		echo 'Hubo un error, intente nuevamente';
		return;
	}
?>
<div id="page-content" hidden="">
	<?php ob_start(); ?>
	<?php foreach ($oo as $item_oo): ?>
		<?php 
			$doo = DetalleOrdenOptimizacion::where('IdOrdenOptimizacion',$item_oo->IdOrdenOptimizacion)->where('Estado',true)->first();
			$pm = PropMejora::find($item_oo->IdPropMejora);
			$dpm = DetallePropMejora::where('IdPropMejora',$pm->IdPropMejora)->where('Estado',true)->first();
		 ?>
		<div style="text-align: center;">
			Orden de Optimización
		</div>
		Fecha a realizar: <?php echo date_format(date_create($doo->FechaFechaRealizar),'d-m-Y h:i:s a') ?>
		<br>
		Fecha de ultima modificación: <?php echo date_format(date_create($doo->Fecha),'d-m-Y h:i:s a') ?>
		<br>
		Detalle: 
		<br>
		<?php echo $doo->Detalle ?>
		<br>
		Detalle de la Propuesta de Mejora: "<?php echo $dpm->Titulo ?>", en la cual se basa la presente orden de optimización
		<br>
		<?php echo $dpm->Detalle ?>
		<br>
		<br>
	<?php endforeach ?>
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
		$mpdf->Output('reporte.pdf',"D");
	}
 ?>