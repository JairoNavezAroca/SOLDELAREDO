<?php
    include("conexion.php");
    class proyecto{

        function proyecto(){

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

        function registrarProyecto($proyecto,$annioInicio,$annioFin){
            $sql = "INSERT INTO proyecto(proyecto,annioInicio,annioFin,estado) VALUES('$proyecto','$annioInicio','$annioFin','PENDIENTE');";
            $this->query($sql);
        }

        function eliminarProyecto($idProyecto){
            $sql = "DELETE FROM proyecto_actividades WHERE idProyecto='$idProyecto';";
            $this->query($sql);
            $sql = "DELETE FROM proyecto WHERE idProyecto='$idProyecto';";
            $this->query($sql);
        }

        function seleccionarProyecto($idProyecto){
            $sql = "SELECT * FROM proyecto WHERE idProyecto='$idProyecto';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosProyecto(){
            $sql = "SELECT * FROM proyecto";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarActividadProy($actividad,$duracion,$equipo,$subtareas,$idProyecto){
            $sql = "INSERT INTO proyecto_actividades(actividad,duracion,equipo,subtareas,idProyecto) VALUES('$actividad','$duracion','$equipo','$subtareas','$idProyecto');";
            $this->query($sql);
        }

        function editarActividadProy($actividad,$duracion,$equipo,$subtareas,$idActividadProy){
            $sql = "UPDATE proyecto_actividades SET actividad='$actividad',duracion='$duracion',equipo='$equipo',subtareas='$subtareas' WHERE idActividad='$idActividadProy';";
            $this->query($sql);
        }

        function eliminarActividadProy($idActividadProy){
            $sql = "DELETE FROM proyecto_actividades WHERE idActividad='$idActividadProy';";
            $this->query($sql);
        }

        function seleccionarActividadProy($idActividadProy){
            $sql = "SELECT * FROM proyecto_actividades WHERE idActividad='$idActividadProy';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarActividadesProy($idProyecto){
            $sql = "SELECT * FROM proyecto_actividades WHERE idProyecto='$idProyecto';";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>