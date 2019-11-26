<?php
	session_start();
	include("../header1.php"); 
?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Registrar / Editar Usuario</h1>
	<br>
	<form action="../controlador/Usuario_Editar.php" method="post">
		<?php if(isset($_SESSION['mensaje'])){ ?>
			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="alert alert-danger text-center">
					<p><?php echo $_SESSION['mensaje']; ?></p>
				</div>
			</div>
			<div class="col-md-2"></div>
			</div>
			<?php unset($_SESSION['mensaje']); ?>
		<?php } ?>
		<!-- IdUsuario -->
		<div class="row" hidden="">
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
			<div class="col-md-10 col-sm-10 col-xs-10">
				<div class="text-center">Id Usuario</div>
				<input type="text" class="form-control" name="IdUsuario">
			</div>
			<div class="col-md-1 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Apellidos -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Apellidos</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" required="">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Nombres -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Nombres</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="text" class="form-control" name="Nombres" placeholder="Nombres" required="">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Email -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Email</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="email" class="form-control" name="Email" placeholder="Email" required="">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Contraseña -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Contraseña</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="password" class="form-control" name="Contraseña" placeholder="Contraseña" required="">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Pregunta -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Pregunta</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="text" class="form-control" name="Pregunta" placeholder="Pregunta" required="">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Respuesta -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Respuesta</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="text" class="form-control" name="Respuesta" placeholder="Respuesta" required="">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br><br>
		<center>
			<input type="submit" class="btn btn-primary" value="Registrar" value="Registrar" required="">
		</center>
	</form>
</div>
<!-- /page content -->
<?php
	include("../footer1.php");
?>
