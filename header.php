<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SOL DE LAREDO</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

    <!-- LINKS QUE SE REQUIERAN-->
    <!------------------------------------->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="principal.php" class="site_title"><i class="fa fa-sun-o"></i> <span>SOL DE LAREDO</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a><i class="fa fa-briefcase"></i> Gerencia <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="vPlanAnual.php">Plan de Trabajo Anual</a></li>
                      <li><a href="vVerAspectos.php">Aspectos Estratégicos</a></li>
                      <li><a href="vFoda.php">FODA</a></li>
                      <li><a href="vProyecto.php">Proyecto</a></li>
                      <li><a href="vCartaAceptacion.php">Carta de aceptación</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cubes"></i> Produccion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="vObjetivosProduccion.php">Objetivos</a></li>
                      <li><a href="vProducto.php">Producto</a></li>
                      <li><a href="vProduccion.php">Producción</a></li>
                      <li><a href="vOrdenTrabajo.php">Orden de Trabajo</a></li>
                      <li><a href="vInsumo.php">Insumo</a></li>
                      <li><a href="vPedido.php">Pedidos de compras</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-pie-chart"></i> Procesos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Plan de Mejora <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vista/mejoradeprocesos.php">Mejora de Procesos</a></li>
                          <li><a href="vista/mejoradetareas.php">Mejora de Tareas</a></li>
                          <li><a href="vista/criteriosdecalificacion.php">Criterios de calificacion</a></li>
                        </ul>
                      </li>
                      <li><a href="vista/modelado.php">Modelado de Procesos</a></li>
                      <li><a href="vista/orden.php">Orden de implementación</a></li>
                      <li><a href="vista/listadeprocesos.php">Historial de pocesos</a></li>
                    </ul>
                  </li>
<!--MODIFICADO-->                  
                  <li><a><i class="fa fa-line-chart"></i> Productividad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--
                      <li><a href="vista/Productividad_TecProduccionMain.php">Técnica de producción</a></li>
                      <li><a href="vista/Productividad_EvalRendMain.php">Evaluación de rendimiento</a></li>
                      -->
                      <!--
                        <ul class="nav child_menu">
                          <li><a href="tables.html">Tiempo</a></li>
                          <li><a href="tables_dynamic.html">Personal</a></li>
                          <li><a href="tables_dynamic.html">Proceso</a></li>
                        </ul>
                      -->
                      <!--
                      <li><a href="vista/Productividad_PropMejoraMain.php">Propuesta de mejora</a></li>
                      <li><a href="vista/Productividad_OrdOptimizacionMain.php">Orden de optimización</a></li>
                      -->
                      <li><a>Técnica de producción<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vista/Productividad_TecProduccionMain.php">Listar</a></li>
                          <li><a href="vista/Productividad_TecProduccionVer.php">Ver</a></li>
                          <li><a href="vista/Productividad_TecProduccionEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Evaluación de rendimiento<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vista/Productividad_EvalRendMain.php">Listar</a></li>
                          <li><a href="vista/Productividad_EvalRendVer.php">Ver</a></li>
                          <li><a href="vista/Productividad_EvalRendEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Propuesta de mejora<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vista/Productividad_PropMejoraMain.php">Listar</a></li>
                          <li><a href="vista/Productividad_PropMejoraVer.php">Ver</a></li>
                          <li><a href="vista/Productividad_PropMejoraEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Orden de optimización<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vista/Productividad_OrdOptimizacionMain.php">Listar</a></li>
                          <li><a href="vista/Productividad_OrdOptimizacionVer.php">Ver</a></li>
                          <li><a href="vista/Productividad_OrdOptimizacionEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>                      

                    </ul>
                  </li>
<!--MODIFICADO-->
                  <li><a><i class="fa fa-male"></i> Personal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Empleados <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="vista/Agregar.php">Registrar Personal</a></li>
                          <li><a href="vista/MantenedorPersonal.php">Listar Personal</a></li>
                        </ul>
                      </li> 
                      <li><a href="vista/asistencias.php">Asistencias</a></li>
                      <li><a>Capacitación <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="vista/capacitaciones.php">Agregar Capacitación</a></li>
                          <li><a href="vista/ListarC.php">Listar Capacitaciones</a></li>
                        </ul> 
                      </li>
                      <li><a href="vista/com_ben.php">Compensación y Beneficios</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Registrar Usuario</a></li>
                      <li><a href="vista/vlistarusuarios.php">Listar Usuario</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="javascript:;">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->