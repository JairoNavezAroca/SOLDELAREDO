<?php session_start();
  if(isset($_SESSION['area'])){
?>
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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- LINKS QUE SE REQUIERAN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
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
                  <?php if($_SESSION['area']=='Administrador'){?>
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
                          <li><a href="mejoradeprocesos.php">Mejora de Procesos</a></li>
                          <li><a href="mejoradetareas.php">Mejora de Tareas</a></li>
                          <li><a href="criteriosdecalificacion.php">Criterios de calificacion</a></li>
                        </ul>
                      </li>
                      <li><a href="modelado.php">Modelado de Procesos</a></li>
                      <li><a href="orden.php">Orden de implementación</a></li>
                      <li><a href="listadeprocesos.php">Historial de pocesos</a></li>
                    </ul>
                  </li>
<!--MODIFICADO-->                  
                  <li><a><i class="fa fa-line-chart"></i> Productividad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--
                      <li><a href="Productividad_TecProduccionMain.php">Técnica de producción</a></li>
                      <li><a href="Productividad_EvalRendMain.php">Evaluación de rendimiento</a></li>
                      -->
                      <!--
                        <ul class="nav child_menu">
                          <li><a href="tables.html">Tiempo</a></li>
                          <li><a href="tables_dynamic.html">Personal</a></li>
                          <li><a href="tables_dynamic.html">Proceso</a></li>
                        </ul>
                      -->
                      <!--
                      <li><a href="Productividad_PropMejoraMain.php">Propuesta de mejora</a></li>
                      <li><a href="Productividad_OrdOptimizacionMain.php">Orden de optimización</a></li>
                      -->
                      <li><a>Técnica de producción<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_TecProduccionMain.php">Listar</a></li>
                          <li><a href="Productividad_TecProduccionVer.php">Ver</a></li>
                          <li><a href="Productividad_TecProduccionEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Evaluar rendimiento<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_EvalRendMain.php">Listar</a></li>
                          <li><a href="Productividad_EvalRendVer.php">Ver</a></li>
                          <li><a href="Productividad_EvalRendEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Propuesta de mejora<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_PropMejoraMain.php">Listar</a></li>
                          <li><a href="Productividad_PropMejoraVer.php">Ver</a></li>
                          <li><a href="Productividad_PropMejoraEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Orden de optimización<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_OrdOptimizacionMain.php">Listar</a></li>
                          <li><a href="Productividad_OrdOptimizacionVer.php">Ver</a></li>
                          <li><a href="Productividad_OrdOptimizacionEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>                      

                    </ul>
                  </li>
<!--MODIFICADO-->
                  <li><a><i class="fa fa-male"></i> Personal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a> Empleados <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="Agregar.php">Registrar Personal</a></li>
                          <li><a href="MantenedorPersonal.php">Listar Personal</a></li>
                        </ul>
                      </li>
                      <li><a href="asistencias.php">Asistencias</a></li>
                      <li><a href="normas.php">Normas de Seguridad</a></li>
                       <li><a>Capacitación<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="capacitaciones.php">Agregar Capacitación</a></li>
                          <li><a href="ListarC.php">Listar Capacitaciones</a></li>
                        </ul> 
                      </li>
                      <li><a href="com_ben.php">Compensación y Beneficios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Usuario_Editor.php">Registrar Usuario</a></li>
                      <li><a href="Usuario_Ver.php">Listar Usuario</a></li>
                    </ul>
                  </li>
                  <?php } if($_SESSION['area']=='Gerencia'){?>
                  <li><a><i class="fa fa-briefcase"></i> Gerencia <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="vPlanAnual.php">Plan de Trabajo Anual</a></li>
                      <li><a href="vVerAspectos.php">Aspectos Estratégicos</a></li>
                      <li><a href="vFoda.php">FODA</a></li>
                      <li><a href="vProyecto.php">Proyecto</a></li>
                      <li><a href="vCartaAceptacion.php">Carta de aceptación</a></li>
                    </ul>
                  </li>
                  <?php } if($_SESSION['area']=='Produccion'){?>
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
                  <?php } if($_SESSION['area']=='Procesos'){?>
                  <li><a><i class="fa fa-pie-chart"></i> Procesos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Plan de Mejora <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="mejoradeprocesos.php">Mejora de Procesos</a></li>
                          <li><a href="mejoradetareas.php">Mejora de Tareas</a></li>
                          <li><a href="criteriosdecalificacion.php">Criterios de calificacion</a></li>
                        </ul>
                      </li>
                      <li><a href="modelado.php">Modelado de Procesos</a></li>
                      <li><a href="orden.php">Orden de implementación</a></li>
                      <li><a href="listadeprocesos.php">Historial de pocesos</a></li>
                    </ul>
                  </li>
                  <?php }?>
                  <?php if($_SESSION['area']=='Productividad'){?>
                    <!--MODIFICADO-->                  
                  <li><a><i class="fa fa-line-chart"></i> Productividad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--
                      <li><a href="Productividad_TecProduccionMain.php">Técnica de producción</a></li>
                      <li><a href="Productividad_EvalRendMain.php">Evaluación de rendimiento</a></li>
                      -->
                      <!--
                        <ul class="nav child_menu">
                          <li><a href="tables.html">Tiempo</a></li>
                          <li><a href="tables_dynamic.html">Personal</a></li>
                          <li><a href="tables_dynamic.html">Proceso</a></li>
                        </ul>
                      -->
                      <!--
                      <li><a href="Productividad_PropMejoraMain.php">Propuesta de mejora</a></li>
                      <li><a href="Productividad_OrdOptimizacionMain.php">Orden de optimización</a></li>
                      -->
                      <li><a>Técnica de producción<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_TecProduccionMain.php">Listar</a></li>
                          <li><a href="Productividad_TecProduccionVer.php">Ver</a></li>
                          <li><a href="Productividad_TecProduccionEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Evaluación de rendimiento<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_EvalRendMain.php">Listar</a></li>
                          <li><a href="Productividad_EvalRendVer.php">Ver</a></li>
                          <li><a href="Productividad_EvalRendEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Propuesta de mejora<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_PropMejoraMain.php">Listar</a></li>
                          <li><a href="Productividad_PropMejoraVer.php">Ver</a></li>
                          <li><a href="Productividad_PropMejoraEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>
                      <li><a>Orden de optimización<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="Productividad_OrdOptimizacionMain.php">Listar</a></li>
                          <li><a href="Productividad_OrdOptimizacionVer.php">Ver</a></li>
                          <li><a href="Productividad_OrdOptimizacionEditor.php">Registrar / Editar</a></li>
                        </ul>
                      </li>                      

                    </ul>
                  </li>
                  <?php } if($_SESSION['area']=='Personal'){?>
                  <li><a><i class="fa fa-male"></i> Personal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a> Empleados <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="Agregar.php">Registrar Personal</a></li>
                          <li><a href="MantenedorPersonal.php">Listar Personal</a></li>
                        </ul>
                      </li>
                      <li><a href="asistencias.php">Asistencias</a></li>
                      <li><a href="normas.php">Normas de Seguridad</a></li>
                       <li><a>Capacitación<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                         <li><a href="capacitaciones.php">Agregar Capacitación</a></li>
                          <li><a href="ListarC.php">Listar Capacitaciones</a></li>
                        </ul> 
                      </li>
                      <li><a href="com_ben.php">Compensación y Beneficios</a></li>
                    </ul>
                  </li>
                  <?php }?>
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
                    <?php echo $_SESSION['nombreusuario']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="Usuario_ConfigurarCuenta.php">
                        <span>Mi Cuenta</span>
                      </a>
                    </li>
                    <li><a href="../controlador/Usuario_Salir.php">Cerrar Sesion</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php  
  }
  else{
    header("Location: login.php");

  }
?>