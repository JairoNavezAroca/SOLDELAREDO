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
            $sql = "INSERT INTO ordenpedido(numero,proveedor,fecha,lugarAtencion) VALUES('$numero','$proveedor','$fecha','$lugarAtencion');";
            $this->query($sql);
        }

        function eliminarPedido($numero){
            $sql = "DELETE FROM detallepedido WHERE numero='$numero';";
            $this->query($sql);
            $sql = "DELETE FROM ordenpedido WHERE numero='$numero';";
            $this->query($sql);
        }

        function seleccionarPedidos($numero){
            $sql="SELECT * FROM ordenpedido WHERE numero='$numero';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosPedidos(){
            $sql="SELECT * FROM ordenpedido;";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarInsumoPed($numero,$codInsumo,$cantidad){
            $sql = "INSERT INTO detallepedido(numero,codInsumo,cantidad) VALUES('$numero','$codInsumo','$cantidad');";
            $this->query($sql);
        }

        function eliminarInsumoPed($numero,$codInsumo){
            $sql = "DELETE FROM detallepedido WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $this->query($sql);
        }

        function seleccionarInsumoPed($numero,$codInsumo){
            $sql = "SELECT * FROM detallepedido WHERE numero='$numero' AND codInsumo='$codInsumo';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosInsumoPed($numero){
            $sql = "SELECT * FROM detallepedido dp INNER JOIN insumos i on dp.codInsumo=i.codInsumo WHERE dp.numero='$numero';";
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