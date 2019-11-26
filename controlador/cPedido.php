<?php 
    include("../modelo/pedido.php");
    $pedido = new pedido();
    $numero = isset($_POST['numero']) ? $_POST['numero']:NULL;
    $numero1 = isset($_GET['numero']) ? $_GET['numero']:NULL;
    $proveedor = isset($_POST['proveedor']) ? $_POST['proveedor']:NULL;
    $fecha = isset($_POST['fecha']) ? $_POST['fecha']:NULL;
    $lugarAtencion = isset($_POST['lugarAtencion']) ? $_POST['lugarAtencion']:NULL;
    $codInsumo = isset($_POST['codInsumo']) ? $_POST['codInsumo']:NULL;
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosPedido = $pedido->seleccionarTodosPedidos();
    $datosInsumoPed=$pedido->seleccionarTodosInsumoPed($numero1);
    $datosInsumo = $pedido->seleccionarTodosInsumo();
    switch ($accion) {
        case 'registrarPedido':
            $pedido->registrarPedido($numero,$proveedor,$fecha,$lugarAtencion);
            echo 1;
            break;
        case 'eliminarPedido':
            $pedido->eliminarPedido($numero);
            echo 1;
            break;
        case 'seleccionarProduccion':
            $datosPedido=$pedido->seleccionarPedidos($numero);
            $jsonstring = json_encode($datosPedido);
            echo $jsonstring;
            break;
        case 'seleccionarTodosProduccion':
            $datosPedido=$pedido->seleccionarTodosPedidos();
            break;
        case 'registrarInsumoPed':
            $pedido->registrarInsumoPed($numero,$codInsumo,$cantidad);
            echo 1;
            break;
        case 'eliminarInsumoPed':
            $pedido->eliminarInsumoPed($numero,$codInsumo);
            echo 1;
            break;
        case 'seleccionarInsumoPed':
            $datosInsumoPed=$pedido->seleccionarInsumoPed($numero,$codInsumo);
            $jsonstring = json_encode($datosInsumoPed);
            echo $jsonstring;
            break;
        case 'seleccionarTodosInsumoPed':
            $datosInsumoPed=$pedido->seleccionarTodosInsumoPed($numero1);
            break;
    }
?>