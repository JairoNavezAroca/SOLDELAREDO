<?php
	include("../header1.php"); 
?>
<!--DateTimePicker-->
<link href="../vendors/_libreriasextra_/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script type="text/javascript">
	function editorhtml(){
		var contenidoenhtml = $("#summernote").summernote('code');
		$("#Detalle").val(contenidoenhtml);
		$("#sb").submit();
	}
	function editorhtml2(){
		var sel = document.getElementById('sel');
		sel.removeAttribute('disabled');
	}
</script>
<!-- page content -->
<?php 
	require_once '../modelo/Productividad_PropMejora.php';
	require_once '../modelo/Productividad_DetallePropMejora.php';
	require_once '../modelo/Productividad_OrdenOptimizacion.php';
	require_once '../modelo/Productividad_DetalleOrdenOptimizacion.php';
	$oo = new OrdenOptimizacion();
	$oo->IdOrdenOptimizacion = "-1";
	$doo = new DetalleOrdenOptimizacion();
	$doo->Respuesta = "Esperando confirmación";
	$doo->Detalle = "";
	$doo->FechaRealizar = new DateTime();
	$doo->FechaRealizar->modify('-6 hours');
	$estadoselect = '';
	if (isset($_GET['id'])) {
		$estadoselect = 'disabled';
		$oo = OrdenOptimizacion::find($_GET['id']);
		$doo = DetalleOrdenOptimizacion::where('IdOrdenOptimizacion',$oo->IdOrdenOptimizacion)->where('Estado',true)->first();
		$doo->FechaRealizar = new DateTime($doo->FechaRealizar);
		$doo->Detalle = str_replace("'","\'",$doo->Detalle);
	}
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Registrar / Editar Orden de Optimización</h1>
	<br>
	<form action="../controlador/Productividad_OrdOptimizacionEditor.php" method="post">
		<!-- IdOrdenOptimizacion -->
		<div class="row" hidden="">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Id Orden Optimizacion</div>
				<input type="text" class="form-control" name="IdOrdenOptimizacion" value="<?php echo $oo->IdOrdenOptimizacion ?>">
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Titulo Propuesta de Mejora -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Titulo Propuesta de Mejora</div>
				<select class="form-control" id="sel" name="IdPropMejora" <?php echo $estadoselect ?>>
					<?php $pm = PropMejora::all()->reverse() ?>
					<?php foreach ($pm as $item): ?>
						<?php 
							$IdPropMejora = $item->IdPropMejora;
							$texto = DetallePropMejora::where('IdPropMejora',$IdPropMejora)->where('Estado',true)->first()->Titulo;
							;
							$seleccionar = '';
							if($oo->IdPropMejora == $IdPropMejora)
								$seleccionar = 'selected';
						 ?>
						<option value="<?php echo $IdPropMejora ?>" <?php echo $seleccionar ?>><?php echo $texto ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Respuesta -->
		<div class="row" hidden="">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Respuesta</div>
				<input type="text" class="form-control" name="Respuesta" placeholder="Respuesta" value="<?php echo $doo->Respuesta ?>">
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Fecha -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Fecha a Realizar</div>
          <div class="form-group">
          	<?php 
          		$t = $doo->FechaRealizar;
          		$dia = $t->format("d");
          		$año = $t->format("Y");
          		$mes = $t->format("m");
          		switch ($mes) {
          			case 1: $mes = 'Enero'; break;
          			case 2: $mes = 'Febrero'; break;
          			case 3: $mes = 'Marzo'; break;
          			case 4: $mes = 'Abril'; break;
          			case 5: $mes = 'Mayo'; break;
          			case 6: $mes = 'Junio'; break;
          			case 7: $mes = 'Julio'; break;
          			case 8: $mes = 'Agosto'; break;
          			case 9: $mes = 'Septiembre'; break;
          			case 10: $mes = 'Octubre'; break;
          			case 11: $mes = 'Noviembre'; break;
          			case 12: $mes = 'Diciembre'; break;
          			default: 'algún mes'; break;
          		}
          		$frase = "$dia $mes $año";
          		$otrafrase = $t->format("Y-m-d h:i:s");
          	 ?>
            <input type="hidden" id="dtp_input1" name="FechaRealizar" value='<?php echo $otrafrase ?>' />
            <div class="input-group date form_date" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
								<input type="text" class="form-control" id="minifecha" value="<?php echo $frase ?>">
                <input type="hidden" class="form-control" size="16" type="text" value="" readonly id="xxxxx">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-remove"></span>
                </span>
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </span>
            </div>
          </div>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Detalle -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Detalle</div>
				<div id="summernote"></div>
				<input type="text" id="Detalle" name="Detalle" hidden="">
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<center>
			<button class="btn btn-primary" onclick="editorhtml2(); editorhtml()">Registrar</button>
			<input type="submit" value="Registrar" id="sb" hidden="">
		</center>
	</form>
</div>
<!-- /page content -->
<?php
	include("../footer1.php");
?>
<!-- <div id="summernote"></div> -->
<link href="../vendors/_libreriasextra_/summernote/dist/summernote.css" rel="stylesheet">
<script src="../vendors/_libreriasextra_/summernote/dist/summernote.js"></script>
<script src="../vendors/_libreriasextra_/summernote/lang/summernote-es-ES.js"></script>
<script>
	$('#summernote').summernote({
		placeholder: 'Detalle de la Orden de Optimizacion',
		tabsize: 2,
		height: 200,
		lang: 'es-ES'
	});
	$("#summernote").summernote('code', ('<?php echo ($doo->Detalle) ?>'));
</script>
<!--DateTimePicker-->
<script type="text/javascript" src="../vendors/_libreriasextra_/bootstrap-datetimepicker-master/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../vendors/_libreriasextra_/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../vendors/_libreriasextra_/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.es.js"></script>
<script type="text/javascript">
	$('.form_date').datetimepicker({
		language:  'es',
		weekStart: 1,
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
		});
	$("#xxxxx").on( "change", function() {    
		$('#minifecha').val($('#xxxxx').val());
	});
</script>
