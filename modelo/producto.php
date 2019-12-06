<?php
    include("conexion.php");
    class producto{

        function producto(){

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

        function registrar($codProducto,$descripcion,$precio,$cantidad){
            $sql = "INSERT INTO Producto(codProducto,descripcion,precio,cantidad) VALUES('$codProducto','$descripcion','$precio','$cantidad');";
            $this->query($sql);
        }

        function actualizar($codProducto,$descripcion,$precio,$cantidad){
            $sql = "UPDATE Producto SET descripcion='$descripcion',precio='$precio',cantidad='$cantidad' WHERE codProducto='$codProducto';";
            $this->query($sql);
        }

        function eliminar($codProducto){
            $sql = "DELETE FROM Producto WHERE codProducto='$codProducto';";
            $this->query($sql);
        }

        function seleccionar($codProducto){
            $sql = "SELECT * FROM Producto WHERE codProducto='$codProducto';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodos(){
            $sql = "SELECT * FROM Producto";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>