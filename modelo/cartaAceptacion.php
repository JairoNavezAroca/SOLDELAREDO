<?php
    include("conexion.php");
    class cartaAceptacion{

        function cartaAceptacion(){

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

        function registrarCarta($area,$descripcion,$tipo,$annio,$titulo,$idProyecto){
            $sql = "INSERT INTO carta(area,descripcion,tipo,annio,titulo,idProyecto) VALUES('$area','$descripcion','$tipo','$annio','$titulo','$idProyecto');";
            $this->query($sql);
        }

        function eliminarCarta($idCarta){
            $sql = "DELETE FROM carta WHERE idCarta='$idCarta';";
            $this->query($sql);
        }

        function seleccionarCarta($idCarta){
            $sql = "SELECT * FROM carta WHERE idCarta='$idCarta';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosCarta(){
            $sql = "SELECT * FROM carta";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosProy(){
            $sql = "SELECT * FROM proyecto";
            $datos = $this->query1($sql);
            return $datos;
        }

    }
?>