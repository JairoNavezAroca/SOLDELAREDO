<?php
		$id_area=$_GET['area'];
		$dni=$_GET['dni'];
 		 include('../header1.php'); 
 		 include('consultas.php');
 		 $Personal=ListarPersonalDni($dni);
?>
	<!-- page content -->
		<div class="right_col" role="main">
          <div class="">
          			<!--------------------->
          			<form method="POST" action="ModificarPersonal.php?dni=<?=$Personal[0] ?> & area=<?=$id_area ?>"> 
                <h4>Nombre</h4>
                <input type="text" class="form-control" name="nombre" value=<?php echo $Personal[1]; ?>>
                <h4>DIRECCION</h4>
                <input type="text" class="form-control" name="direccion" value=<?php echo $Personal[2]; ?>>
                <h4>TELEFONO</h4>
                <input type="text" class="form-control" name="telefono" value=<?php echo $Personal[3]; ?>>
                <h4>CORREO</h4>
                <input type="email" class="form-control" name="correo" value=<?php echo $Personal[4]; ?>>
                  <h4>FECHA DE NACIMIENTO</h4>
                <input type="text" class="form-control" name="fechaNac" value=<?php echo $Personal[5]; ?>>

                <button type="submit" class="btn btn-primary"> GUARDAR</button>
 					</form>
          			<!---------------------->
          </div>
        </div>
     <!-- /page content -->
<?php
  include("../footer1.php");
?>
