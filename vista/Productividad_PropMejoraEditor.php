<?php
	include("../header1.php"); 
?>
<script type="text/javascript">
	function editorhtml(){
		var contenidoenhtml = $("#summernote").summernote('code');
		$("#Detalle").val(contenidoenhtml);
		$("#sb").submit();
	}
</script>
<!-- page content -->
<?php 
	require_once '../modelo/Productividad_PropMejora.php';
	require_once '../modelo/Productividad_DetallePropMejora.php';
	$pm = new PropMejora();
	$pm->IdPropMejora = "-1";
	$dpm = new DetallePropMejora();
	$dpm->Titulo = "";
	$dpm->Detalle = "";
	if (isset($_GET['id'])) {
		$pm = PropMejora::find($_GET['id']);
		$dpm = DetallePropMejora::where('IdPropMejora',$pm->IdPropMejora)->where('Estado',true)->first();
		$dpm->Detalle = str_replace("'","\'",$dpm->Detalle);
	}
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Registrar / Editar Propuesta de Mejora</h1>
	<br>
	<form action="../controlador/Productividad_PropMejoraEditor.php" method="post">
		<!-- IdPropMejora -->
		<div class="row" hidden>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Id Propuesta</div>
				<input type="text" class="form-control" name="IdPropMejora" value='<?php echo $pm->IdPropMejora ?>'>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Titulo -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Título</div>
				<input type="text" class="form-control" name="Titulo" placeholder="Título" value='<?php echo $dpm->Titulo ?>'>
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
			<button class="btn btn-primary" onclick="editorhtml()">Registrar</button>
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
		placeholder: 'Detalle de la Propuesta de Mejora',
		tabsize: 2,
		height: 200,
		lang: 'es-ES'
	});
	$("#summernote").summernote('code', ('<?php echo ($dpm->Detalle) ?>'));
</script>
