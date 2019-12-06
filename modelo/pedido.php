<?php
    include("conexion.php");
    class pedido{

        function pedido(){

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

        function registrarPedido($numero,$proveedor,$fecha,$lugarAtencion){
            $sql = "INSERT INTO OrdenPedido(numero,proveedor,fecha,lugarAtencion) VALUES('$numero','$proveedor','$fecha','$lugarAtencion');";
            $this->query($sql);
        }

        function eliminarPedido($numero){
            $sql = "DELETE FROM DetallePedido WHERE numero='$numero';";
            $this->query($sql);
            $sql = "DELETE FROM OrdenPedido WHERE numero='$numero';";
            $this->query($sql);
        }

        function seleccionarPedidos($numero){
            $sql="SELECT * FROM OrdenPedido WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosPedidos(){
            $sql="SELECT * FROM OrdenPedido;";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarInsumoPed($numero,$codInsumo,$cantidad){
            $sql = "INSERT INTO DetallePedido(numero,codInsumo,cantidad) VALUES('$numero','$codInsumo','$cantidad');";
            $this->query($sql);
        }

        function eliminarInsumoPed($numero,$codInsumo){
            $sql = "DELETE FROM DetallePedido WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $this->query($sql);
        }

        function seleccionarInsumoPed($numero,$codInsumo){
            $sql = "SELECT * FROM DetallePedido WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosInsumoPed($numero){
            $sql = "SELECT * FROM DetallePedido dp INNER JOIN Insumos i on dp.codInsumo=i.codInsumo WHERE dp.numero='$numero';";
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