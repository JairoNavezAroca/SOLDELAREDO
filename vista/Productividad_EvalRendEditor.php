<?php
	include("../header1.php"); 
?>
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
	require_once '../modelo/Productividad_Personal.php';
	require_once '../modelo/Productividad_Area.php';
	require_once '../modelo/Productividad_EvRendimiento.php';
	require_once '../modelo/Productividad_DetalleEvRendimiento.php';
	$er = new EvRendimiento();
	$er->IdEvRendimiento = -1;
	$der = new DetalleEvRendimiento();
	$der->Observacion = '';
	$estadoselect = '';
	if (isset($_GET['id'])) {
		$estadoselect = 'disabled';
		$er = EvRendimiento::find($_GET['id']);
		$der = DetalleEvRendimiento::where('IdEvRendimiento',$er->IdEvRendimiento)->where('Estado',true)->first();
		$der->FechaRealizar = new DateTime($der->FechaRealizar);
		$der->Observacion = str_replace("'","\'",$der->Observacion);
	}
?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Registrar / Editar Evaluación de Rendimiento</h1>
	<br>

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

	<form action="../controlador/Productividad_EvalRendEditor.php" method="post">
		<!-- IdEvRendimiento -->
		<div class="row" hidden>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Id Evaluacion</div>
				<input type="text" class="form-control" name="IdEvRendimiento" value="<?php echo $er->IdEvRendimiento ?>">
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Perosonal -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Nombre del Trabajador</div>
				<select class="form-control" name="DniPersonal" id="sel" <?php echo $estadoselect ?>>>
					<?php 
						$a = Area::all();
					 ?>
					 <?php foreach ($a as $item_a): ?>
					 	<optgroup label="<?php echo $item_a->nombre ?>">
					 		<?php 
								$p = Personal::where('idarea',$item_a->idarea)->get();
					 		 ?>
								<?php foreach ($p as $item): ?>
									<?php 
										$seleccionaroption = '';
										if ($er->DniPersonal == $item->DniPersonal)
											$seleccionaroption = 'selected';
									 ?>
									<option value="<?php echo $item->DniPersonal ?>" <?php echo $seleccionaroption ?>><?php echo "$item->apellido $item->nombre" ?></option>
								<?php endforeach ?>
					 	</optgroup>					 	
					 <?php endforeach ?>
				</select>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Porcentaje -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Resultado(Porcentaje)</div>
				<input type="number" class="form-control" name="Porcentaje" placeholder="%" min="0" max="100" pattern="^\d*(\.\d{0,1})?$" step="0.1" value="<?php echo $der->Porcentaje ?>" required>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<!-- Detalle -->
		<div class="row">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Observacion</div>
				<div id="summernote"></div>
				<input type="text" id="Detalle" name="Observacion" hidden="">
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
		placeholder: 'Detalle de la Evaluacion de Rendimiento',
		tabsize: 2,
		height: 200,
		lang: 'es-ES'
	});
	$("#summernote").summernote('code', ('<?php echo ($der->Observacion) ?>'));
</script>
