<?php
  include("../header1.php"); 
?>
<!-- page content -->
<?php 
	require_once '../modelo/Productividad_Personal.php';
	require_once '../modelo/Productividad_EvRendimiento.php';
	require_once '../modelo/Productividad_DetalleEvRendimiento.php';
	if (isset($_GET['id'])) {
		$er = EvRendimiento::find($_GET['id']);
		$der = DetalleEvRendimiento::where('IdEvRendimiento',$er->IdEvRendimiento)->get()->reverse();
		$e = Personal::find($er->DniPersonal);
	}
	else
		echo '<script> window.location.replace("Productividad_OrdOptimizacionMain.php") </script>';
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Ver Evaluación de Rendimiento(Historial de cambios)</h1>
	<br>
	<h4 class="text-center">Empleado: <?php echo "$e->apellido, $e->nombre" ?></h4>
	<h5 class="text-center" hidden=""><a href="" data-toggle="modal" data-target="#modal_">Ver ficha de personal</a></h5>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<!-- start accordion -->
		<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
			<?php $i = 1 ?>
			<?php foreach ($der as $item): ?>
				<div class="panel">
				<a class="panel-heading collapsed" role="tab" id="p_<?php echo $i ?>" data-toggle="collapse" data-parent="#accordion" href="#panel_<?php echo $i ?>" aria-expanded="false" aria-controls="panel_<?php echo $i ?>">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left"><h4 class="panel-title">Fecha de la Evaluación: <?php echo date_format(date_create($item->Fecha),'d-m-Y h:i:s a') ?></h4></div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right"><h3 class="panel-title">Porcentaje: <?php echo $item->Porcentaje ?>%</h3></div>
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
 												<?php echo $item->Observacion ?>
 											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a href="../controlador/Productividad_EvalRend_Exportar_Version.php?id=<?php echo $item->IdDetalleEvRendimiento ?>&Word" target="__blank">Exportar a Word</a>
							&nbsp&nbsp|&nbsp&nbsp
							<a href="../controlador/Productividad_EvalRend_Exportar_Version.php?id=<?php echo $item->IdDetalleEvRendimiento ?>&PDF" target="__blank">Exportar a PDF</a>
						</div>
					</div>
				</div>
			</div>
			<?php $i++ ?>
			<?php endforeach ?>
			</div>
		</div>
		<!-- end of accordion -->
		<!-- The modal -->
		<div class="modal fade" id="modal_" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="modalLabel">Empleado: <?php echo "$e->apellido, $e->nombre" ?></h4>
					</div>
					<div class="modal-body">
						datos...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
<?php
  include("../footer1.php");
?>
