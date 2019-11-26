<?php
    include("../modelo/produccion.php");
    $produccion = new produccion();
    $numero = isset($_POST['numero']) ? $_POST['numero']:NULL;
    $numero1 = isset($_GET['numero']) ? $_GET['numero']:NULL;
    $area = isset($_POST['area']) ? $_POST['area']:NULL;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha']:NULL;
    $fechaAlmacen = isset($_POST['fechaAlmacen']) ? $_POST['fechaAlmacen']:NULL;
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad']:NULL;
    $especificaciones = isset($_POST['especificaciones']) ? $_POST['especificaciones']:NULL;
    $labor = isset($_POST['labor']) ? $_POST['labor']:NULL;
    $codProducto = isset($_POST['codProducto']) ? $_POST['codProducto']:NULL;
    $codInsumo = isset($_POST['codInsumo']) ? $_POST['codInsumo']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosProduccion=$produccion->seleccionarTodosProduccion();
    $datosProduccion2=$produccion->seleccionarProduccion($numero1);
    $datosInsumoProd=$produccion->seleccionarTodosInsumoProd($numero1);
    $datosProducto = $produccion->seleccionarTodosProducto();
    $datosInsumo = $produccion->seleccionarTodosInsumo();
    switch ($accion) {
        case 'registrarProduccion':
            $produccion->registrarProduccion($numero,$area,$fecha,$fechaAlmacen,$cantidad,$especificaciones,$labor,$codProducto);
            echo 1;
            break;
        case 'eliminarProduccion':
            $produccion->eliminarProduccion($numero);
            echo 1;
            break;
        case 'seleccionarProduccion':
            $datosProduccion=$produccion->seleccionarProduccion($numero);
            $jsonstring = json_encode($datosProduccion);
            echo $jsonstring;
            break;
        case 'seleccionarTodosProduccion':
            $datosProduccion=$produccion->seleccionarTodosProduccion();
            break;
        case 'registrarInsumoPro':
            $produccion->registrarInsumoPro($numero,$codInsumo,$cantidad);
            echo 1;
            break;
        case 'eliminarInsumoProd':
            $produccion->eliminarInsumoProd($numero,$codInsumo);
            echo 1;
            break;
        case 'seleccionarInsumoProd':
            $datosInsumoProd=$produccion->seleccionarInsumoProd($numero,$codInsumo);
            $jsonstring = json_encode($datosInsumoProd);
            echo $jsonstring;
            break;
        case 'seleccionarTodosInsumoProd':
            $datosInsumoProd=$produccion->seleccionarTodosInsumoProd($numero1);
            break;
    }
?>