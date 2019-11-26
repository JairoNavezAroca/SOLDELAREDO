<?php
    include("../modelo/ordentrabajo.php");
    $ordenTrabajo = new ordenTrabajo();
    $numero = isset($_POST['numero']) ? $_POST['numero']:NULL;
    $numero1 = isset($_GET['numero']) ? $_GET['numero']:NULL;
    $area = isset($_POST['area']) ? $_POST['area']:NULL;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha']:NULL;
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $importeUnitario = isset($_POST['importeUnitario']) ? $_POST['importeUnitario']:NULL;
    $idActividad = isset($_POST['idActividad']) ? $_POST['idActividad']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosOrden=$ordenTrabajo->seleccionarTodosOrdenTrabajo();
    $datosOrdenUnico=$ordenTrabajo->seleccionarOrdenTrabajo($numero1);
    $datosActividades=$ordenTrabajo->seleccionarTodosActividadOrdenTrab($numero1);
    switch ($accion) {
        case 'registrarOrdenTrabajo':
            $ordenTrabajo->registrarOrdenTrabajo($numero,$area,$fecha);
            echo 1;
            break;
        case 'eliminarOrdenTrabajo':
            $ordenTrabajo->eliminarOrdenTrabajo($numero);
            echo 1;
            break;
        case 'seleccionarOrdenTrabajo':
            $datosOrden=$ordenTrabajo->seleccionarOrdenTrabajo($numero);
            $jsonstring = json_encode($datosOrden);
            echo $jsonstring;
            break;
        case 'seleccionarTodosOrdenTrabajo':
            $datosOrden=$ordenTrabajo->seleccionarTodosOrdenTrabajo();
            break;
        case 'registrarActividadOrdenTrab':
            $ordenTrabajo->registrarActividadOrdenTrab($cantidad,$descripcion,$importeUnitario,$numero);
            echo 1;
            break;
        case 'eliminarActividadOrdenTrab':
            $ordenTrabajo->eliminarActividadOrdenTrab($idActividad);
            echo 1;
            break;
        case 'seleccionarActividadOrdenTrab':
            $datosActividades=$ordenTrabajo->seleccionarActividadOrdenTrab($idActividad);
            $jsonstring = json_encode($datosActividades);
            echo $jsonstring;
            break;
        case 'seleccionarTodosActividadOrdenTrab':
            $datosActividades=$ordenTrabajo->seleccionarTodosActividadOrdenTrab($numero1);
            break;
        case 'actualizarActividadOrdenTrab':
            $ordenTrabajo->actualizarActividadOrdenTrab($cantidad,$descripcion,$importeUnitario,$idActividad);
            echo 1;
            break;
    }
?>