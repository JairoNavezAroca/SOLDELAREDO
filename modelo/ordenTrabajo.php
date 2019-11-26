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
            $sql = "INSERT INTO ordentrabajo(numero,area,fecha) VALUES('$numero','$area','$fecha');";
            $this->query($sql);
        }

        function eliminarOrdenTrabajo($numero){
            $sql = "DELETE FROM actividadesordentrab WHERE numero='$numero';";
            $this->query($sql);
            $sql = "DELETE FROM ordentrabajo WHERE numero='$numero';";
            $this->query($sql);
        }

        function seleccionarOrdenTrabajo($numero){
            $sql = "SELECT * FROM ordentrabajo WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosOrdenTrabajo(){
            $sql = "SELECT * FROM ordentrabajo";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarActividadOrdenTrab($cantidad,$descripcion,$importeUnitario,$numero){
            $sql = "INSERT INTO actividadesordentrab(cantidad,descripcion,importeUnitario,numero) VALUES('$cantidad','$descripcion','$importeUnitario','$numero');";
            $this->query($sql);
        }

        function eliminarActividadOrdenTrab($idActividad){
            $sql = "DELETE FROM actividadesordentrab WHERE idActividad='$idActividad';";
            $this->query($sql);
        }

        function seleccionarActividadOrdenTrab($idActividad){
            $sql = "SELECT * FROM actividadesordentrab WHERE idActividad='$idActividad';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosActividadOrdenTrab($numero){
            $sql = "SELECT * FROM actividadesordentrab WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }
        function actualizarActividadOrdenTrab($cantidad,$descripcion,$importeUnitario,$idActividad){
             $sql = "UPDATE actividadesordentrab SET cantidad='$cantidad',descripcion='$descripcion', importeUnitario='$importeUnitario' WHERE idActividad='$idActividad';";
             $this->query($sql);
        }
    }
?>