<?php
  include("../header1.php"); 
?>
<!-- page content -->
<?php 
	require_once '../modelo/Productividad_TecnicaProduccion.php';
	require_once '../modelo/Productividad_DetalleTecnicaProduccion.php';
	if (isset($_GET['id'])) {
		$tp = TecnicaProduccion::find($_GET['id']);
		$dtp = DetalleTecnicaProduccion::where('IdTecnica',$tp->IdTecnica)->get()->reverse();
	}
	else
		echo '<script> window.location.replace("Productividad_TecProduccionMain.php") </script>';
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Ver Técnica de Producción(Historial de cambios)</h1>
	<br>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<!-- start accordion -->
		<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
			<?php $i = 1 ?>
			<?php foreach ($dtp as $item): ?>
				<div class="panel">
				<a class="panel-heading collapsed" role="tab" id="p_<?php echo $i ?>" data-toggle="collapse" data-parent="#accordion" href="#panel_<?php echo $i ?>" aria-expanded="false" aria-controls="panel_<?php echo $i ?>">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<h4 class="panel-title">Titulo: <?php echo $item->Titulo ?></h4>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right">
							<h3 class="panel-title">Fecha: <?php echo date_format(date_create($item->Fecha),'d-m-Y h:i:s a') ?></h3>
						</div>
					</div>
				</a>
				<div id="panel_<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="p_<?php echo $i ?>">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="text-justify">
									<div style="all: initial">
										<div style="all: unset">
											<span style="word-wrap: break-word; overflow-wrap: break-word; width: 100%;">
 												<?php echo $item->Detalle ?>
 											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a href="../controlador/Productividad_TecProduccion_Exportar_Version.php?id=<?php echo $item->IdDetalleTecnica ?>&Word" target="__blank">Exportar a Word</a>
							&nbsp&nbsp|&nbsp&nbsp
							<a href="../controlador/Productividad_TecProduccion_Exportar_Version.php?id=<?php echo $item->IdDetalleTecnica ?>&PDF" target="__blank">Exportar a PDF</a>
						</div>
					</div>
				</div>
			</div>
			<?php $i++ ?>
			<?php endforeach ?>
			</div>
		</div>
		<!-- end of accordion -->
	</div>
</div>
<!-- /page content -->
<?php
  include("../footer1.php");
?>
