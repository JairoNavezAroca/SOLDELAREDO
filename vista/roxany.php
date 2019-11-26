//<script src="../vendors/_libreriasextra_/word/jquery.js.3.3.1.js"></script>
<script src="../vendors/_libreriasextra_/word/FileSaver.js"></script>
<script src="../vendors/_libreriasextra_/word/jquery.wordexport.js"></script>
<div id="page-content">
	<?php ob_start(); ?>

	sdadasdadasdasdasd
	<h1>xd</h1>

	<?php $html = ob_get_contents(); ?>
	<?php ob_end_clean(); ?>
	<?php echo $html; ?>
</div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#page-content').wordExport('Reporte');
		});
		//setTimeout(function(){window.close();},1000);
	</script>
<?php 
		require_once '../vendor/autoload.php';
		//https://mpdf.github.io/installation-setup/installation-v7-x.html
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML($html);
		$mpdf->Output('Reporte.pdf',"D");
 ?>