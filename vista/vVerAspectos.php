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
                    <div class="col-md-11 col-sm-11 col-xs-12">
                        <label>Mision: </label>
                        <label><?php if($datos[0][1])echo $datos[0][1]; else echo ""?></label>
                    </div>
                  </div>
                  <div class="form-group">  
                    <div class="col-md-11 col-sm-11 col-xs-12">
                        <label>Vision: </label>
                        <label><?php if($datos[0][2])echo $datos[0][2]; else echo ""?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-10 col-sm-11 col-xs-12">
                        <label>Propuesta de Valor: </label>
                        <label><?php if($datos[0][3])echo $datos[0][3]; else echo ""?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-10 col-sm-11 col-xs-12">
                        <label>Factor Diferenciador: </label>
                        <label><?php if($datos[0][4])echo $datos[0][4]; else echo ""?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-10 col-sm-11 col-xs-12">
                        <label>Objetivos Estrategicos: </label>
                        <label><?php if($datos[0][5])echo $datos[0][5]; else echo ""?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-7 col-sm-10 col-xs-12 col-md-offset-5">
                      <button type="button" id="guardar" class="btn btn-primary" onclick="window.location.href='vAspectos.php'"><i class="fa fa-pencil"></i> Editar</button>
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