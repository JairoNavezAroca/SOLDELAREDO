<?php
  include("../header1.php"); 
  include("../controlador/cAspectos.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>ASPECTOS DE LA EMPRESA</h2>                  
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br /> 
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-12">Mision </label>
                    <div class="col-md-11 col-sm-11 col-xs-12">
                      <input type="text" class="form-control" id="mision" value="<?php if($datos[0][1])echo $datos[0][1]; else echo ""?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-1 col-sm-1 col-xs-12" >Vision </label>
                    <div class="col-md-11 col-sm-11 col-xs-12">
                      <input type="text" class="form-control" id="vision" value="<?php if($datos[0][2])echo $datos[0][2]; else echo ""?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 col-sm-1 col-xs-12">Propuesta de Valor </label>
                    <div class="col-md-10 col-sm-11 col-xs-12">
                      <input type="text" class="form-control" id="valor" value="<?php if($datos[0][3])echo $datos[0][3]; else echo ""?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 col-sm-1 col-xs-12" >Factor Diferenciador </label>
                    <div class="col-md-10 col-sm-11 col-xs-12">
                      <input class="date-picker form-control col-md-7 col-xs-12"  type="text" id="factor" value="<?php if($datos[0][4])echo $datos[0][4]; else echo ""?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 col-sm-1 col-xs-12" >Objetivos Estrategicos </label>
                    <div class="col-md-10 col-sm-11 col-xs-12">
                      <textarea style="resize: none" class="form-control" id="objetivos"><?php if($datos[0][5])echo $datos[0][5]; else echo ""?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
                      <button type="reset" class="btn btn-secondary col-md-4 col-sm-10 col-xs-12"><i class="fa fa-paint-brush"></i> Limpiar</button>
                      <button type="button" id="registrar" class="btn btn-success col-md-4 col-sm-10 col-xs-12" onclick="registrarAspecto()"><i class="fa fa-save"></i> Registrar</button>
                      <button type="button" id="actualizar" style="display:none;" class="btn btn-success col-md-4 col-sm-10 col-xs-12" onclick="actualizarAspecto()"><i class="fa fa-save"></i> Actualizar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- LINKS QUE SE REQUIERAN-->
    <script src="../js/aspectos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>