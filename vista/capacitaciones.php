<?php
  include("../header1.php"); 
  include("consultas.php");
  $areas=ListarAreas();
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<br>
          	<br><br>
          	<br>
          	<!--    ACA EMPIEZAAAAA   -->
          	<div class="panel panel-default">
			  <div class="panel-body" align="center">
			    <u><h3>AGREGAR CAPACITACIÓN</h3></u>
			  </div>
			  
			  <div class="panel-footer">
			  	<form method="POST" action="GuardarC.php">
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">EMPRESA O CAPACITADOR</label>
					      <input type="text" class="form-control" name="empresa" id="empresa" >
					    </div>
					    <div class="form-group col-md-6">
					       <label for="inputEmail4">AREA</label>
					      <select class="form-control" name="idarea" id="idarea">
						  <?php for ($i=0; $i <sizeof($areas) ; $i++) { ?>
						    <option value="<?= $areas[$i][0] ?>"><?php echo  $areas[$i][1]  ?></option>
						  <?php 
						  }  
						  ?>
						</select>
					    </div>
					  </div>

					  <div class="form-group">
					    <label for="inputAddress">DESCRIPCIÓN</label>
					    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="1234 Main St">
					  </div>
					  <div class="form-group">
					   	<label for="from">FECHA</label>
                  		 <div class="input-group date mo-date">
						  <input type="date" class="form-control" name="fecha" id="fecha"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					  </div>
					  <button type="submit" class="btn btn-primary">ACEPTAR</button>
				</form>







			  </div>
			</div>
			<!-- ACA TERMINA-->
          </div>
        </div>
        <!-- /page content -->
<?php
  include("../footer1.php");
?>