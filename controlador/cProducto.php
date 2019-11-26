<?php
    include("../modelo/producto.php");
    $producto = new producto();
    $codProducto = isset($_POST['codProducto']) ? $_POST['codProducto']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $precio = isset($_POST['precio']) ? $_POST['precio']:NULL;
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datos=$producto->seleccionarTodos();
    switch ($accion) {
        case 'registrar':
            $producto->registrar($codProducto,$descripcion,$precio,$cantidad);
            echo 1;
            break;
        case 'actualizar':
            $producto->actualizar($codProducto,$descripcion,$precio,$cantidad);
            echo 1;
            break;
        case 'eliminar':
            $producto->eliminar($codProducto);
            echo 1;
            break;
        case 'seleccionar':
            $datos=$producto->seleccionar($codProducto);
            $jsonstring = json_encode($datos);
            echo $jsonstring;
            break;
        case 'seleccionarTodos':
            $datos=$producto->seleccionarTodos();
            break;
    }
?>
