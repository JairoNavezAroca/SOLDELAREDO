<?php
    include("../modelo/insumo.php");
    $insumo = new insumo();
    $codInsumo = isset($_POST['codInsumo']) ? $_POST['codInsumo']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $precio = isset($_POST['precio']) ? $_POST['precio']:NULL;
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datos=$insumo->seleccionarTodos();
    switch ($accion) {
        case 'registrar':
            $insumo->registrar($codInsumo,$descripcion,$precio,$cantidad);
            echo 1;
            break;
        case 'actualizar':
            $insumo->actualizar($codInsumo,$descripcion,$precio,$cantidad);
            echo 1;
            break;
        case 'eliminar':
            $insumo->eliminar($codInsumo);
            echo 1;
            break;
        case 'seleccionar':
            $datos=$insumo->seleccionar($codInsumo);
            $jsonstring = json_encode($datos);
            echo $jsonstring;
            break;
        case 'seleccionarTodos':
            $datos=$insumo->seleccionarTodos();
            break;
    }
?>