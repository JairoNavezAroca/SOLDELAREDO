<?php
    include("conexion.php");
    class insumo{

        function insumo(){

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

        function registrar($codInsumo,$descripcion,$precio,$cantidad){
            $sql = "INSERT INTO insumos(codInsumo,descripcion,precio,cantidad) VALUES('$codInsumo','$descripcion','$precio','$cantidad');";
            $this->query($sql);
        }

        function actualizar($codInsumo,$descripcion,$precio,$cantidad){
            $sql = "UPDATE insumos SET descripcion='$descripcion',precio='$precio',cantidad='$cantidad' WHERE codInsumo='$codInsumo';";
            $this->query($sql);
        }

        function eliminar($codInsumo){
            $sql = "DELETE FROM insumos WHERE codInsumo='$codInsumo';";
            $this->query($sql);
        }

        function seleccionar($codInsumo){
            $sql = "SELECT * FROM insumos WHERE codInsumo='$codInsumo';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodos(){
            $sql = "SELECT * FROM insumos";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>