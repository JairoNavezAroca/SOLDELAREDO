<?php
    include("../modelo/proyecto.php");
    $proyecto = new proyecto();
    $idProyecto = isset($_POST['idProyecto']) ? $_POST['idProyecto']:NULL;
    $idProyecto1 = isset($_GET['idProyecto']) ? $_GET['idProyecto']:NULL;
    $idActividadProy = isset($_POST['idActividadProy']) ? $_POST['idActividadProy']:NULL;
    $nomProyecto = isset($_POST['proyecto']) ? $_POST['proyecto']:NULL;
    $annioInicio = isset($_POST['annioInicio']) ? $_POST['annioInicio']:NULL;
    $annioFin = isset($_POST['annioFin']) ? $_POST['annioFin']:NULL;
    $actividad = isset($_POST['descripcion']) ? $_POST['descripcion']:NULL;
    $duracion = isset($_POST['duracion']) ? $_POST['duracion']:NULL;
    $equipo = isset($_POST['equipo']) ? $_POST['equipo']:NULL;
    $subtareas = isset($_POST['subtareas']) ? $_POST['subtareas']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datosProy = $proyecto->seleccionarTodosProyecto();
    $datosProyUnico = $proyecto->seleccionarProyecto($idProyecto1);
    $datosActividadProy = $proyecto->seleccionarActividadesProy($idProyecto1);
    switch ($accion) {
        case 'registrarProyecto':
            $proyecto->registrarProyecto($nomProyecto,$annioInicio,$annioFin);
            echo 1;
            break;
        case 'eliminarProyecto':
            $proyecto->eliminarProyecto($idProyecto);
            echo 1;
            break;
        case 'seleccionarProyecto':
            $datosProy=$proyecto->seleccionarProyecto($idProyecto);
            break;
        case 'seleccionarTodosProyecto':
            $datosProy=$proyecto->seleccionarTodosProyecto();
            break;
        case 'registrarActividadProy':
            $proyecto->registrarActividadProy($actividad,$duracion,$equipo,$subtareas,$idProyecto);
            echo 1;
            break;
        case 'editarActividadProy':
            $proyecto->editarActividadProy($actividad,$duracion,$equipo,$subtareas,$idActividadProy);
            echo 1;
            break;
        case 'eliminarActividadProy':
            $proyecto->eliminarActividadProy($idActividadProy);
            echo 1;
            break;
        case 'seleccionarActividadProy':
            $datosActividadProy=$proyecto->seleccionarActividadProy($idActividadProy);
            $jsonstring = json_encode($datosActividadProy);
            echo $jsonstring;
            break;
        case 'seleccionarActividadesProy':
            $datosActividadProy = $proyecto->seleccionarActividadesProy($idProyecto1);
            echo 1;
            break;
    }
?>