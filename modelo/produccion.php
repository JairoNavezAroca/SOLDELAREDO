<?php
    include("conexion.php");
    class produccion{

        function produccion(){

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

        function registrarProduccion($numero,$area,$fecha,$fechaAlmacen,$cantidad,$especificaciones,$labor,$codProducto){
            $sql = "INSERT INTO Produccion(numero,area,fecha,fechaAlmacen,cantidad,especificaciones,labor,codProducto) VALUES('$numero','$area','$fecha','$fechaAlmacen','$cantidad','$especificaciones','$labor','$codProducto');";
            $this->query($sql);
        }

        function eliminarProduccion($numero){
            $sql = "DELETE FROM DetalleProduccion WHERE numero='$numero';";
            $this->query($sql);
            $sql = "DELETE FROM Produccion WHERE numero='$numero';";
            $this->query($sql);
        }

        function seleccionarProduccion($numero){
            $sql = "SELECT * FROM Produccion WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosProduccion(){
            $sql = "SELECT * FROM Produccion";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarInsumoPro($numero,$codInsumo,$cantidad){
            $sql = "INSERT INTO DetalleProduccion(numero,codInsumo,cantidad) VALUES('$numero','$codInsumo','$cantidad');";
            $this->query($sql);
        }

        function eliminarInsumoProd($numero,$codInsumo){
            $sql = "DELETE FROM DetalleProduccion WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $this->query($sql);
        }

        function seleccionarInsumoProd($numero,$codInsumo){
            $sql = "SELECT * FROM DetalleProduccion WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosInsumoProd($numero){
            $sql = "SELECT * FROM DetalleProduccion dp INNER JOIN Insumos i on dp.codInsumo=i.codInsumo WHERE dp.numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosProducto(){
            $sql = "SELECT * FROM Producto";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosInsumo(){
            $sql = "SELECT * FROM Insumos";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>