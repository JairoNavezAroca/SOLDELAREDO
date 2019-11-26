<?php
    include("../modelo/foda.php");
    $foda = new foda();
    $idFoda = isset($_POST['idFoda']) ? $_POST['idFoda']:NULL;
    $idFoda1 = isset($_GET['idFoda']) ? $_GET['idFoda']:NULL;
    $annio = isset($_POST['annio']) ? $_POST['annio']:NULL;
    $idFortaleza = isset($_POST['idFortaleza']) ? $_POST['idFortaleza']:NULL;
    $idDebilidad = isset($_POST['idDebilidad']) ? $_POST['idDebilidad']:NULL;
    $idOportunidad = isset($_POST['idOportunidad']) ? $_POST['idOportunidad']:NULL;
    $idAmenaza = isset($_POST['idAmenaza']) ? $_POST['idAmenaza']:NULL;
    $idEstrategiaFO = isset($_POST['idEstrategiaFO']) ? $_POST['idEstrategiaFO']:NULL;
    $idEstrategiaFA = isset($_POST['idEstrategiaFA']) ? $_POST['idEstrategiaFA']:NULL;
    $idEstrategiaDO = isset($_POST['idEstrategiaDO']) ? $_POST['idEstrategiaDO']:NULL;
    $idEstrategiaDA = isset($_POST['idEstrategiaDA']) ? $_POST['idEstrategiaDA']:NULL;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $fortalezas = isset($_POST['fortalezas']) ? $_POST['fortalezas']:NULL;
    $debilidades = isset($_POST['debilidades']) ? $_POST['debilidades']:NULL;
    $oportunidades = isset($_POST['oportunidades']) ? $_POST['oportunidades']:NULL;
    $amenazas = isset($_POST['amenazas']) ? $_POST['amenazas']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosFODA=$foda->seleccionarTodosFoda();
    $datosFortaleza = $foda->seleccionarTodosFortaleza($idFoda1);
    $datosDebilidad = $foda->seleccionarTodosDebilidad($idFoda1);
    $datosOportunidad = $foda->seleccionarTodosOportunidad($idFoda1);
    $datosAmenaza = $foda->seleccionarTodosAmenaza($idFoda1);
    $datosEstrategiaFO = $foda->seleccionarTodosEstrategiaFO($idFoda1);
    $datosEstrategiaFA = $foda->seleccionarTodosEstrategiaFA($idFoda1);
    $datosEstrategiaDO = $foda->seleccionarTodosEstrategiaDO($idFoda1);
    $datosEstrategiaDA = $foda->seleccionarTodosEstrategiaDA($idFoda1);
    switch ($accion) {
        case 'registrarFoda':
            $foda->registrarFoda($annio);
            echo 1;
            break;
        case 'eliminarFoda':
            $foda->eliminarFoda($idFoda,$idFortaleza,$idDebilidad,$idOportunidad,$idAmenaza);
            echo 1;
            break;
        case 'seleccionarFoda':
            $datosFODA=$foda->seleccionarFoda($idFoda);
            break;
        case 'seleccionarTodosFoda':
            $datosFODA=$foda->seleccionarTodosFoda();
            break;
        case 'registrarFortaleza':
            $foda->registrarFortaleza($descripcion,$idFoda);
            echo 1;
            break;
        case 'actualizarFortaleza':
            $foda->actualizarFortaleza($descripcion,$idFortaleza);
            echo 1;
            break;
        case 'eliminarFortaleza':
            $foda->eliminarFortaleza($idFortaleza);
            echo 1;
            break;
        case 'seleccionarFortaleza':
            $datosFortaleza=$foda->seleccionarFortaleza($idFortaleza);
            $jsonstring = json_encode($datosFortaleza);
            echo $jsonstring;
            break;
        case 'seleccionarTodosFortaleza':
            $datosFortaleza = $foda->seleccionarTodosFortaleza($idFoda1);
            echo 1;
            break;
        case 'registrarDebilidad':
            $foda->registrarDebilidad($descripcion,$idFoda);
            echo 1;
            break;
        case 'actualizarDebilidad':
            $foda->actualizarDebilidad($descripcion,$idDebilidad);
            echo 1;
            break;
        case 'eliminarDebilidad':
            $foda->eliminarDebilidad($idDebilidad);
            echo 1;
            break;
        case 'seleccionarDebilidad':
            $datosDebilidad=$foda->seleccionarDebilidad($idDebilidad);
            $jsonstring = json_encode($datosDebilidad);
            echo $jsonstring;
            break;
        case 'seleccionarTodosDebilidad':
            $datosDebilidad = $foda->seleccionarTodosDebilidad($idFoda1);
            echo 1;
            break;
        case 'registrarOportunidad':
            $foda->registrarOportunidad($descripcion,$idFoda);
            echo 1;
            break;
        case 'actualizarOportunidad':
            $foda->actualizarOportunidad($descripcion,$idOportunidad);
            echo 1;
            break;
        case 'eliminarOportunidad':
            $foda->eliminarOportunidad($idOportunidad);
            echo 1;
            break;
        case 'seleccionarOportunidad':
            $datosOportunidad=$foda->seleccionarOportunidad($idOportunidad);
            $jsonstring = json_encode($datosOportunidad);
            echo $jsonstring;
            break;
        case 'seleccionarTodosOportunidad':
            $datosOportunidad = $foda->seleccionarTodosOportunidad($idFoda1);
            echo 1;
            break; 
        case 'registrarAmenaza':
            $foda->registrarAmenaza($descripcion,$idFoda);
            echo 1;
            break;
        case 'actualizarAmenaza':
            $foda->actualizarAmenaza($descripcion,$idAmenaza);
            echo 1;
            break;
        case 'eliminarAmenaza':
            $foda->eliminarAmenaza($idAmenaza);
            echo 1;
            break;
        case 'seleccionarAmenaza':
            $datosAmenaza=$foda->seleccionarAmenaza($idAmenaza);
            $jsonstring = json_encode($datosAmenaza);
            echo $jsonstring;
            break;
        case 'seleccionarTodosAmenaza':
            $datosAmenaza = $foda->seleccionarTodosAmenaza($idFoda1);
            echo 1;
            break; 
        case 'registrarEstrategiaFO':
            $foda->registrarEstrategiaFO($descripcion,$idFoda,$fortalezas,$oportunidades);
            echo 1;
            break;
        case 'actualizarEstrategiaFO':
            $foda->actualizarEstrategiaFO($descripcion,$idEstrategiaFO);
            echo 1;
            break;
        case 'eliminarEstrategiaFO':
            $foda->eliminarEstrategiaFO($idEstrategiaFO);
            echo 1;
            break;
        case 'seleccionarEstrategiaFO':
            $datosEstrategiaFO=$foda->seleccionarEstrategiaFO($idEstrategiaFO);
            $jsonstring=json_encode($datosEstrategiaFO);
            echo $jsonstring;
            break;
        case 'seleccionarTodosEstrategiaFO':
            $datosEstrategiaFO = $foda->seleccionarTodosEstrategiaFO($idFoda1);
            echo 1;
            break;
        case 'registrarEstrategiaFA':
            $foda->registrarEstrategiaFA($descripcion,$idFoda,$fortalezas,$amenazas);
            echo 1;
            break;
        case 'actualizarEstrategiaFA':
            $foda->actualizarEstrategiaFA($descripcion,$idEstrategiaFA);
            echo 1;
            break;
        case 'eliminarEstrategiaFA':
            $foda->eliminarEstrategiaFA($idEstrategiaFA);
            echo 1;
            break;
        case 'seleccionarEstrategiaFA':
            $datosEstrategiaFA=$foda->seleccionarEstrategiaFA($idEstrategiaFA);
            $jsonstring=json_encode($datosEstrategiaFA);
            echo $jsonstring;
            break;
        case 'seleccionarTodosEstrategiaFA':
            $datosEstrategiaFA = $foda->seleccionarTodosEstrategiaFA($idFoda1);
            echo 1;
            break; 
        case 'registrarEstrategiaDO':
            $foda->registrarEstrategiaDO($descripcion,$idFoda,$debilidades,$oportunidades);
            echo 1;
            break;
        case 'actualizarEstrategiaDO':
            $foda->actualizarEstrategiaDO($descripcion,$idEstrategiaDO);
            echo 1;
            break;
        case 'eliminarEstrategiaDO':
            $foda->eliminarEstrategiaDO($idEstrategiaDO);
            echo 1;
            break;
        case 'seleccionarEstrategiaDO':
            $datosEstrategiaDO=$foda->seleccionarEstrategiaDO($idEstrategiaDO);
            $jsonstring=json_encode($datosEstrategiaDO);
            echo $jsonstring;
            break;
        case 'seleccionarTodosEstrategiaDO':
            $datosEstrategiaDO = $foda->seleccionarTodosEstrategiaDO($idFoda1);
            echo 1;
            break; 
        case 'registrarEstrategiaDA':
            $foda->registrarEstrategiaDA($descripcion,$idFoda,$debilidades,$amenazas);
            echo 1;
            break;
        case 'actualizarEstrategiaDA':
            $foda->actualizarEstrategiaDA($descripcion,$idEstrategiaDA);
            echo 1;
            break;
        case 'eliminarEstrategiaDA':
            $foda->eliminarEstrategiaDA($idEstrategiaDA);
            echo 1;
            break;
        case 'seleccionarEstrategiaDA':
            $datosEstrategiaDA=$foda->seleccionarEstrategiaDA($idEstrategiaDA);
            $jsonstring=json_encode($datosEstrategiaDA);
            echo $jsonstring;
            break;
        case 'seleccionarTodosEstrategiaDA':
            $datosEstrategiaDA = $foda->seleccionarTodosEstrategiaDA($idFoda1);
            echo 1;
            break;               
    }
?>