<?php
    include("conexion.php");
    class planAnual{

        function planAnual(){

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

        function registrarPTA($nombre,$objetivo,$meta,$annio){
            $sql = "INSERT INTO PTA(nombre,objetivo,meta,annio) VALUES('$nombre','$objetivo','$meta','$annio');";
            $this->query($sql);
        }

        function eliminarPTA($idPTA){
            $sql = "DELETE FROM PTA_Actividades WHERE idPTA='$idPTA';";
            $this->query($sql);
            $sql = "DELETE FROM PTA_Cronograma WHERE idPTA='$idPTA';";
            $this->query($sql);
            $sql = "DELETE FROM PTA WHERE idPTA='$idPTA';";
            $this->query($sql);
        }

        function seleccionarPTA($idPTA){
            $sql = "SELECT * FROM PTA WHERE idPTA='$idPTA';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosPTA(){
            $sql = "SELECT * FROM PTA";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarActividadPTA($descripcion,$responsable,$fecha,$idPTA){
            $sql = "INSERT INTO PTA_Actividades(descripcion,responsable,fecha,idPTA) VALUES('$descripcion','$responsable','$fecha','$idPTA');";
            $this->query($sql);
        }

        function eliminarActividadPTA($idActividadesPTA){
            $sql = "DELETE FROM PTA_Actividades WHERE idActividadesPTA='$idActividadesPTA';";
            $this->query($sql);
        }

        function seleccionarActividadPTA($idActividadesPTA){
            $sql = "SELECT * FROM PTA_Actividades WHERE idActividadesPTA='$idActividadesPTA';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarActividadesPTA($idPTA){
            $sql = "SELECT * FROM PTA_Actividades where idPTA='$idPTA';";
            $datos = $this->query1($sql);
            return $datos;
        }


    }
?>