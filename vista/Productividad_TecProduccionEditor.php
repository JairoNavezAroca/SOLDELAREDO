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
	require_once '../modelo/Productividad_TecnicaProduccion.php';
	require_once '../modelo/Productividad_DetalleTecnicaProduccion.php';
	$tp = new TecnicaProduccion();
	$tp->IdTecnica = "-1";
	$dtp = new DetalleTecnicaProduccion();
	$dtp->Titulo = "";
	$dtp->Detalle = "";
	if (isset($_GET['id'])) {
		$tp = TecnicaProduccion::find($_GET['id']);
		$dtp = DetalleTecnicaProduccion::where('IdTecnica',$tp->IdTecnica)->where('Estado',true)->first();
		$dtp->Detalle = str_replace("'","\'",$dtp->Detalle);
	}
 ?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Registrar / Editar Técnica de Produccion</h1>

    <?php if(isset($_SESSION['error'])){ ?>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="alert alert-danger">
          <center>
            <p><?php echo $_SESSION['error'] ?></p>
          </center>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    <?php } ?>
    <?php unset($_SESSION['error']) ?>

	<br>
	<form action="../controlador/Productividad_TecProduccionEditor.php" method="post">
		<!-- IdTecnica -->
		<div class="row" hidden="">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Id Técnica</div>
				<input type="text" class="form-control" name="IdTecnica" value='<?php echo $tp->IdTecnica ?>'>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Titulo -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Título</div>
				<input type="text" class="form-control" name="Titulo" placeholder="Título" value='<?php echo $dtp->Titulo ?>'>
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
		placeholder: 'Detalle de la Técnica de Produccion',
		tabsize: 2,
		height: 200,
		lang: 'es-ES'
	});
	$("#summernote").summernote('code', ('<?php echo ($dtp->Detalle) ?>'));
</script>
