<?php
	include("../header1.php");
?>
<!-- Datatables -->
<link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<!-- page content -->
<?php 
	require_once '../modelo/Productividad_Personal.php';
	require_once '../modelo/Productividad_EvRendimiento.php';
	require_once '../modelo/Productividad_DetalleEvRendimiento.php';
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Listar Evaluaciones de Rendimiento</h1>
	<br>
	<!--alinear, poner tabs-->
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="15%">Id Evaluacion</th>
								<th>Nombre del Personal</th>
								<th>Fecha Ultima Evaluacion</th>
								<th>Porcentaje Eficiencia</th>
								<th>Opciones</th>
								<th>Exportar</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$oo = EvRendimiento::all()->reverse();
						?>
						<?php foreach ($oo as $item):?>
							<?php 
								$doo = DetalleEvRendimiento::where('IdEvRendimiento',$item->IdEvRendimiento)->where('Estado',true)->first();
								$p = Personal::find($item->DniPersonal);
							 ?>
							<tr>
								<th><?php echo $item->IdEvRendimiento ?></th>
								<th><?php echo "$p->apellido, $p->nombre" ?></th>
								<th><?php echo $doo->Fecha ?></th>
								<th><?php echo $doo->Porcentaje ?></th>
								<th>
									<a href="Productividad_EvalRendVer.php?id=<?php echo $item->IdEvRendimiento ?>">Ver</a>
									<a href="Productividad_EvalRendEditor.php?id=<?php echo $item->IdEvRendimiento ?>">Editar</a>
								</th>
								<th>
									<a href="../controlador/Productividad_EvalRend_Exportar_Ultimo.php?id=<?php echo $item->IdEvRendimiento ?>&Word" target="__blank">Word</a>
									<a href="../controlador/Productividad_EvalRend_Exportar_Ultimo.php?id=<?php echo $item->IdEvRendimiento ?>&PDF" target="__blank">PDF</a>
								</th>
							</tr>
						<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="text-center">
		<a href="../controlador/Productividad_EvalRend_Exportar_Todo.php?Word" target="__blank">
			<button class="btn btn-primary">Word</button>
		</a>
		<a href="../controlador/Productividad_EvalRend_Exportar_Todo.php?PDF" target="__blank">
			<button class="btn btn-danger">PDF</button>
		</a>
		<a href="Productividad_EvalRendEditor.php">
			<button class="btn btn-success">Nuevo</button>
		</a>
	</div>
</div>
<!-- /page content -->
<?php
	include("../footer1.php");
?>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#datatable").dataTable().fnDestroy();
	$('#datatable').DataTable( {
		"language": {
			"sProcessing": "Procesando...",
			"sLengthMenu": "Mostrar _MENU_ registros",
			"sZeroRecords": "No se encontraron resultados",
			"sEmptyTable": "Ningún dato disponible en esta tabla =(",
			"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix": "",
			"sSearch": "Buscar:",
			"sUrl": "",
			"sInfoThousands": ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst": "Primero",
				"sLast": "Último",
				"sNext": "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending": ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			},
			"buttons": {
				"copy": "Copiar",
				"colvis": "Visibilidad"
			}
		}
	});
});
</script>