<?php
  include("../header1.php"); 
  include("consultas.php");
  $areas=ListarAreas();
?>
<!DOCTYPE html>
<html>
  <script src="../libs/jquery.js" charset="utf-8"></script>
  <!-- Latest compiled and minified CSS -->

<script src="../libs/DataPicker/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="../libs/DataPicker/js/bootstrap-datepicker.css">
<head>
	<title></title>
</head>
<body >
<div class="right_col" role="main" >
          <div class="" >
          	<div class="panel panel-default">
			  <div class="panel-body" align="center">
			    <u><h3>AGREGAR PERSONAL</h3></u>
			  </div>

			  <div class="panel-footer">
 				<div align="center">
 			<form method="POST" action="AgregarPersonal.php" align="center">
				  <div class="row" align="center">
				  	<div class="col-md-2"></div>
				    <div class="col-md-8" align="center">
				      <label for="inputEmail4">DNI</label>
				      <input type="text"  required name="dni" id="dni" minlength="8" maxlength="8" pattern="[0-9]+" class="form-control" placeholder="DNI">
				    </div>
				  	<div class="col-md-2"></div>
				  </div>
				  <div class="row">
				  	<div class="col-md-2"></div>
				    <div class="col-md-4">
				      <label for="inputEmail4">NOMBRES</label>
				      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="First Name">
				    </div>
				    <div class="col-md-4">
				      <label for="inputPassword4">APELLIDOS</label>
				      <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Last Name">
				    </div>
				  	<div class="col-md-2"></div>
				  </div>
				  <div class="row">
				  	<div class="col-md-2"></div>
				  	<div class="col-md-4">
				  		<label for="inputPassword4">CARGO</label><br>
				      <select class="form-control" name="mi_select" id="mi_select">
						  <option value="o">OPERARIO</option>
						  <option value="a">ADMINISTRATIVO</option>
						</select>
				    </div>
				    <div class="col-md-4">
				      <label for="inputPassword4">SALARIO</label>
				      <input type="number" step="any" class="form-control" name="salario" id="Salario" placeholder="Salario">
				    </div>
				  	<div class="col-md-2"></div>
				  </div>

					   <div class="row">
				  		<div class="col-md-2"></div>
					    <div class="col-md-8">
					      <label for="inputEmail4">AREA</label>
					      <select class="form-control" name="idarea" id="idarea">
						  <?php for ($i=0; $i <sizeof($areas) ; $i++) { ?>
						    <option value="<?= $areas[$i][0] ?>"><?php echo  $areas[$i][1]  ?></option>
						  <?php
						  }  
						  ?>
						</select>
					    </div>
				  		<div class="col-md-2"></div>
					  </div>

				     <div class="row">
				  		<div class="col-md-2"></div>
                  		<div class="col-md-4">
                  			<label for="from">Inicio de Contrato</label>
                  		 	<div class="input-group date mo-date">
						  		<input type="date" class="form-control" name="inicioC" id="inicioC"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
							</div>
                  		</div>
                  		<div class="col-md-4">
					  		<label for="from">Fin de Contrato</label>
					     	<div class="input-group date mo-date">
								<input type="date" class="form-control" name="finC" id="finC" ><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
							</div>
                  		</div>
				  		<div class="col-md-2"></div>
                  	</div>
					<script src="../js/app.js"></script>
				  <button type="submit" class="btn btn-primary">GUARDAR</button>
				</form>
 				</div>
			 </div>
			</div>
          </div>
 </div>

</body>
</html>
<?php
  include("../footer1.php");
?>
<!--
					    <div class="col-md-4 mb-3">
				      <label for="validationCustomUsername">Username</label>
				      <div class="input-group">
						  <span class="input-group-addon">@</span>
						  <input type="text" class="form-control" placeholder="Nombre de usuario">
						</div>
				    </div>
				    -->
