<?php
  include("../header1.php"); 
  include("consultas.php");
  $areas=ListarAreas();
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<!-- ijncdnifnrifnijfn-->
          	<br><br><br><br>

            	<div align="center">
					<u><h4>AGREGAR COMPENSACIÓN Y BENEFICIOS</h4></u> 
				</div>

			  <div class="panel-footer">
			  	<form  method="POST" action="listarbeneficiarios.php">
	              <div class="form-group">
	                <label for="formGroupExampleInput">COMPENSACION O BENEFICIO</label>
	                <input type="text" required name="beneficio" pattern="[A-Za-z\sáéíóú]+" id="beneficio" class="form-control">
	              </div>
	              <div class="form-group">
	                 <div class="form-group">
					   	<label for="from">FECHA INICIO</label>
                  		 <div class="input-group date mo-date">
						  <input type="date" class="form-control" name="fechaI" id="fechaI" min="2019-12-01" max="2019-12-31"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					  </div>
	              </div>
	              <div class="form-group">
	                 <div class="form-group">
					   	<label for="from">FECHA INICIO</label>
                  		 <div class="input-group date mo-date">
						  <input type="date" class="form-control" name="fechaF" id="fechaF" min="2019-12-01" max="2019-12-31"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						</div>
					  </div>
	              </div>
	              <button>APLICAR</button>
	            </form>
			  </div>
			</div>
			<!-- ijncdnifnrifnijfn-->
          </div>
        </div>
       
        <!-- /page content -->
<?php
  include("../footer1.php");
?>
