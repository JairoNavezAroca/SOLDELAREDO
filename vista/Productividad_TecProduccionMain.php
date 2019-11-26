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
	require_once '../modelo/Productividad_TecnicaProduccion.php';
	require_once '../modelo/Productividad_DetalleTecnicaProduccion.php';
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Listar Tecnicas de Produccion</h1>
	<br>
	<!--alinear, poner tabs-->
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th width="15%">Id Técnica</th>
								<th>Titulo</th>
								<th>Fecha Registro</th>
								<th>Fecha Ultima Version</th>
								<th>Opciones</th>
								<th>Exportar</th>
							</tr>
						</thead>
						<tbody> 
							<?php 
								$tp = TecnicaProduccion::all()->reverse();
							?>
							<?php foreach ($tp as $item):?>
								<?php 
									$dtp = DetalleTecnicaProduccion::where('IdTecnica',$item->IdTecnica)->where('Estado',true)->first();
								 ?>
								<tr>
									<th><?php echo $item->IdTecnica ?></th>
									<th><?php echo $dtp->Titulo ?></th>
									<th><?php echo $item->FechaRegistro ?></th>
									<th><?php echo $dtp->Fecha ?></th>
									<th>
										<a href="Productividad_TecProduccionVer.php?id=<?php echo $item->IdTecnica ?>">Ver</a>
										<a href="Productividad_TecProduccionEditor.php?id=<?php echo $item->IdTecnica ?>">Editar</a>
									</th>
									<th>
										<a href="../controlador/Productividad_TecProduccion_Exportar_Ultimo.php?id=<?php echo $item->IdTecnica ?>&Word" target="__blank">Word</a>
										<a href="../controlador/Productividad_TecProduccion_Exportar_Ultimo.php?id=<?php echo $item->IdTecnica ?>&PDF" target="__blank">PDF</a>
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
		<a href="../controlador/Productividad_TecProduccion_Exportar_Todo.php?Word" target="__blank">
			<button class="btn btn-primary">Word</button>
		</a>
		<a href="../controlador/Productividad_TecProduccion_Exportar_Todo.php?PDF" target="__blank">
			<button class="btn btn-danger">PDF</button>
		</a>
		<a href="Productividad_TecProduccionEditor.php">
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