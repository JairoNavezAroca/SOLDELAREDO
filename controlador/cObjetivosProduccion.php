<?php
    include("../modelo/objetivosProduccion.php");
    $objetivosProduccion = new objetivosProduccion();
    $idObjetivo = isset($_POST['idObjetivo']) ? $_POST['idObjetivo']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datos=$objetivosProduccion->seleccionarTodos();
    switch ($accion) {
        case 'registrar':
            $objetivosProduccion->registrar($descripcion,$fecha);
            echo 1;
            break;
        case 'eliminar':
            $objetivosProduccion->eliminar($idObjetivo);
            echo 1;
            break;
        case 'seleccionar':
            $datos=$objetivosProduccion->seleccionar($idObjetivo);
            break;
        case 'seleccionarTodos':
            $datos=$objetivosProduccion->seleccionar();
            break;
    }
?>