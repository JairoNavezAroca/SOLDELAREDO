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
            $sql = "INSERT INTO produccion(numero,area,fecha,fechaAlmacen,cantidad,especificaciones,labor,codProducto) VALUES('$numero','$area','$fecha','$fechaAlmacen','$cantidad','$especificaciones','$labor','$codProducto');";
            $this->query($sql);
        }

        function eliminarProduccion($numero){
            $sql = "DELETE FROM detalleproduccion WHERE numero='$numero';";
            $this->query($sql);
            $sql = "DELETE FROM produccion WHERE numero='$numero';";
            $this->query($sql);
        }

        function seleccionarProduccion($numero){
            $sql = "SELECT * FROM produccion WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosProduccion(){
            $sql = "SELECT * FROM produccion";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarInsumoPro($numero,$codInsumo,$cantidad){
            $sql = "INSERT INTO detalleproduccion(numero,codInsumo,cantidad) VALUES('$numero','$codInsumo','$cantidad');";
            $this->query($sql);
        }

        function eliminarInsumoProd($numero,$codInsumo){
            $sql = "DELETE FROM detalleproduccion WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $this->query($sql);
        }

        function seleccionarInsumoProd($numero,$codInsumo){
            $sql = "SELECT * FROM detalleproduccion WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosInsumoProd($numero){
            $sql = "SELECT * FROM detalleproduccion dp INNER JOIN insumos i on dp.codInsumo=i.codInsumo WHERE dp.numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosProducto(){
            $sql = "SELECT * FROM producto";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosInsumo(){
            $sql = "SELECT * FROM insumos";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>