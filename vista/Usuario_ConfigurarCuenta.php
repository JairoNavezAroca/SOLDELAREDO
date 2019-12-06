<?php
	session_start();
	include("../header1.php"); 
	require_once '../modelo/Usuario.php';
	$usuario = Usuario::where('Email',$_SESSION['usuario'])->first();
?>
<div class="right_col" role="main">
	<br>
	<h1 class="text-center">Mi Cuenta</h1>
	<br>
	<form action="../controlador/Usuario_Configurar.php" method="post">
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
				<input type="text" class="form-control" name="IdUsuario" value="<?php echo $usuario->IdUsuario; ?>">
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
				<input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" required="" value="<?php echo $usuario->Apellidos; ?>">
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
				<input type="text" class="form-control" name="Nombres" placeholder="Nombres" required="" value="<?php echo $usuario->Nombres; ?>">
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
				<input type="email" class="form-control" name="Email" placeholder="Email" required="" value="<?php echo $usuario->Email;?>" disabled>
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
				<input type="password" class="form-control" name="Contraseña" placeholder="Contraseña">
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
				<input type="text" class="form-control" name="Pregunta" placeholder="Pregunta">
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
				<input type="text" class="form-control" name="Respuesta" placeholder="Respuesta">
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br>
		<!-- Area -->
		<div class="row">
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
			<div class="col-md-3 col-sm-4 col-xs-4">
				<div class="text-center">Area</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-6">
				<input type="text" class="form-control" value="<?php echo $usuario->Area; ?>" disabled>
			</div>
			<!--
			<div class="col-md-5 col-sm-6 col-xs-6">
				<select class="form-control" name="Area">
					<option value="Administrador">Administrador</option>
					<option value="Gerencia">Gerencia</option>
					<option value="Produccion">Produccion</option>
					<option value="Procesos">Procesos</option>
					<option value="Productividad">Productividad</option>
					<option value="Personal">Personal</option>
				</select>
			</div>
			-->
			<div class="col-md-2 col-sm-1 col-xs-1"></div>
		</div>
		<br><br>
		<center>
			<!--
			<input type="submit" class="btn btn-primary" value="Registrar" value="Registrar" required="">
			-->
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  				Guardar Cambios
			</button>
		</center>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		      	<center>
		        	Ingrese su contraseña actual para validar los cambios
		        	<br><br>
		        	<div class="row">
		        		<div class="col-md-3"></div>
		        		<div class="col-md-6">
		        			<input type="password" name="Contraseña2" class="form-control">
		        		</div>
		        		<div class="col-md-3"></div>
		        	</div>
		        	<br><br>
		      	  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		      	  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
		      	</center>
		      </div>
		    </div>
		  </div>
		</div>

	</form>
</div>
<!-- /page content -->
<?php
	include("../footer1.php");
?>
