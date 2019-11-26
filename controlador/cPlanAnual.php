<?php
    include("../modelo/planAnual.php");
    $planAnual = new planAnual();
    $idPTA = isset($_POST['idPTA']) ? $_POST['idPTA']:NULL;
    $idPTA1 = isset($_GET['idPTA']) ? $_GET['idPTA']:NULL;
    $idActividadesPTA = isset($_POST['idActividadesPTA']) ? $_POST['idActividadesPTA']:NULL;
    $PTA = isset($_POST['PTA']) ? $_POST['PTA']:NULL;
    $objetivo = isset($_POST['objetivo']) ? $_POST['objetivo']:NULL;
    $meta = isset($_POST['meta']) ? $_POST['meta']:NULL;
    $annio = isset($_POST['annio']) ? $_POST['annio']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $responsable = isset($_POST['responsable']) ? $_POST['responsable']:NULL;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosPTA=$planAnual->seleccionarTodosPTA();
    $datosPTAUnico=$planAnual->seleccionarPTA($idPTA1);
    $datosActividadPTA = $planAnual->seleccionarActividadesPTA($idPTA1);
    switch ($accion) {
        case 'registrarPTA':
            $planAnual->registrarPTA($PTA,$objetivo,$meta,$annio);
            echo 1;
            break;
        case 'eliminarPTA':
            $planAnual->eliminarPTA($idPTA);
            echo 1;
            break;
        case 'seleccionarPTA':
            $datosPTA=$planAnual->seleccionarPTA($idPTA);
            break;
        case 'seleccionarTodosPTA':
            $datosPTA=$planAnual->seleccionarTodosPTA();
            break;
        case 'registrarActividadPTA':
            $planAnual->registrarActividadPTA($descripcion,$responsable,$fecha,$idPTA);
            echo 1;
            break;
        case 'eliminarActividadPTA':
            $planAnual->eliminarActividadPTA($idActividadesPTA);
            echo 1;
            break;
        case 'seleccionarActividadPTA':
            $datosActividadPTA=$planAnual->seleccionarActividadPTA($idActividadesPTA);
            echo 1;
            break;
        case 'seleccionarActividadesPTA':
            $datosActividadPTA = $planAnual->seleccionarActividadesPTA($idPTA1);
            echo 1;
            break;

    }
?>