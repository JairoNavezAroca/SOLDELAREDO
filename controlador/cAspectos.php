<?php
    include("../modelo/aspectos.php");
    $aspectos = new aspectos();
    $mision = isset($_POST['mision']) ? $_POST['mision']:NULL;
    $vision = isset($_POST['vision']) ? $_POST['vision']:NULL;
    $factor = isset($_POST['factor']) ? $_POST['factor']:NULL;
    $valor = isset($_POST['valor']) ? $_POST['valor']:NULL;
    $objetivos = isset($_POST['objetivos']) ? $_POST['objetivos']:NULL;
    $accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
    $datos=$aspectos->seleccionar();
    switch ($accion) {
        case 'registrar':
            $aspectos->registrar($mision,$vision,$valor,$factor,$objetivos);
            echo 1;
            break;
        case 'actualizar':
            $aspectos->actualizar($mision,$vision,$valor,$factor,$objetivos);
            echo 1;
            break;
        case 'seleccionar':
            $datos=$aspectos->seleccionar();
            break;
    }
?>