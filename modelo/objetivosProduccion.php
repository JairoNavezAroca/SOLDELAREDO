<?php
    include("conexion.php");
    class objetivosProduccion{

        function objetivosProduccion(){

        }

        function query($sql){
            $conexBD = new conexion();
            $conexBD->conectar();
            $conexBD->query($sql,2);
            $conexBD->desconectar();
        }

        function query1($sql){
            $conexBD = new conexion();
            $conexBD->conectar();
            $datos = $conexBD->query($sql,1);
            $conexBD->desconectar();
            return $datos;
        }

        function registrar($descripcion,$fecha){
            $sql = "INSERT INTO ObjetivosProduccion(descripcion,fecha) VALUES('$descripcion','$fecha');";
            $this->query($sql);
        }

        function eliminar($idObjetivo){
            $sql = "DELETE FROM ObjetivosProduccion WHERE idObjetivo='$idObjetivo';";
            $this->query($sql);
        }

        function seleccionar($idObjetivo){
            $sql = "SELECT * FROM ObjetivosProduccion WHERE idObjetivo='$idObjetivo';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodos(){
            $sql = "SELECT * FROM ObjetivosProduccion";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>