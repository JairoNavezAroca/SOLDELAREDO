<?php
    include("conexion.php");
    class ordenTrabajo{

        function ordenTrabajo(){

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

        function registrarOrdenTrabajo($numero,$area,$fecha){
            $sql = "INSERT INTO OrdenTrabajo(numero,area,fecha) VALUES('$numero','$area','$fecha');";
            $this->query($sql);
        }

        function eliminarOrdenTrabajo($numero){
            $sql = "DELETE FROM ActividadesOrdenTrab WHERE numero='$numero';";
            $this->query($sql);
            $sql = "DELETE FROM OrdenTrabajo WHERE numero='$numero';";
            $this->query($sql);
        }

        function seleccionarOrdenTrabajo($numero){
            $sql = "SELECT * FROM OrdenTrabajo WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosOrdenTrabajo(){
            $sql = "SELECT * FROM OrdenTrabajo";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarActividadOrdenTrab($cantidad,$descripcion,$importeUnitario,$numero){
            $sql = "INSERT INTO ActividadesOrdenTrab(cantidad,descripcion,importeUnitario,numero) VALUES('$cantidad','$descripcion','$importeUnitario','$numero');";
            $this->query($sql);
        }

        function eliminarActividadOrdenTrab($idActividad){
            $sql = "DELETE FROM ActividadesOrdenTrab WHERE idActividad='$idActividad';";
            $this->query($sql);
        }

        function seleccionarActividadOrdenTrab($idActividad){
            $sql = "SELECT * FROM ActividadesOrdenTrab WHERE idActividad='$idActividad';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosActividadOrdenTrab($numero){
            $sql = "SELECT * FROM ActividadesOrdenTrab WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }
        function actualizarActividadOrdenTrab($cantidad,$descripcion,$importeUnitario,$idActividad){
             $sql = "UPDATE ActividadesOrdenTrab SET cantidad='$cantidad',descripcion='$descripcion', importeUnitario='$importeUnitario' WHERE idActividad='$idActividad';";
             $this->query($sql);
        }
    }
?>