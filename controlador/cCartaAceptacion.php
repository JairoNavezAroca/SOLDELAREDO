<?php
    include("../modelo/cartaAceptacion.php");
    $carta = new cartaAceptacion();
    $idCarta = isset($_POST['idCarta']) ? $_POST['idCarta']:NULL;
    $idCarta1 = isset($_GET['idCarta']) ? $_GET['idCarta']:NULL;
    $idProyecto = isset($_POST['idProyecto']) ? $_POST['idProyecto']:NULL;
    $area = isset($_POST['area']) ? $_POST['area']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $tipo = isset($_POST['tipo']) ? $_POST['tipo']:NULL;
    $annio = isset($_POST['annio']) ? $_POST['annio']:NULL;
    $titulo = isset($_POST['titulo']) ? $_POST['titulo']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosCarta=$carta->seleccionarTodosCarta();
    $datosCartaUnico=$carta->seleccionarCarta($idCarta1);
    $datosProy = $carta->seleccionarTodosProy();
    switch ($accion) {
        case 'registrarCarta':
            $carta->registrarCarta($area,$descripcion,$tipo,$annio,$titulo,$idProyecto);
            echo 1;
            break;
        case 'eliminarCarta':
            $carta->eliminarCarta($idCarta);
            echo 1;
            break;
        case 'seleccionarCarta':
            $datosPTA=$carta->seleccionarCarta($idCarta);
            break;
        case 'seleccionarTodosCarta':
            $datosPTA=$carta->seleccionarTodosCarta();
            break;
    }
?>