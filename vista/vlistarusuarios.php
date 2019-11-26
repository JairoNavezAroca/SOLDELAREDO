<?php
  include("../header1.php"); 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="x_panel">
              <div class="x_title">
                <h2>USUARIOS</h2>                  
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <form class="form-horizontal form-label-left input_mask">
                  <div class="form-group">
                    <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="user" placeholder="Nombre de Usuario">
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="Clave" placeholder="Clave">
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="Clave1" placeholder="Confirme la clave">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                      <input type="email" class="form-control" id="email" placeholder="Correo">
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
                      <input type="text" class="form-control" id="tipo" placeholder="Tipo de usuario">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-2 col-sm-2 col-xs-12 has-feedback">
                      <button type="button" class="btn btn-success" onclick=""><i class="fa fa-save"></i> Registrar</button>
                    </div>
                  </div>
                </form>
                <br />
                <h4> LISTA DE USUARIOS</h4>
                <div class="table-responsive col-md-8 col-sm-8 col-xs-12 has-feedback" id="tablaUsuarios">
                <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title" width="50px"> Nro</th>
                          <th class="column-title"> Objetivo</th>
                          <th class="column-title" width="150px"> Fecha</th>
                          <th class="column-title no-link last" width="100px"> Eliminar</th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr class="even pointer">
                          <td class="a-right a-right"></td>
                          <td class=""></td>
                          <td class=""></td>
                          <td class="">
                            <button type="button" class="btn btn-danger eliminar"><i class="fa fa-trash"> Eliminar</i></button>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                </div>
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
    <script src="../js/usuario.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <!------------------------------------->
  </body>
</html>