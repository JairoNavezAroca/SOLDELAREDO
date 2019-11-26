<?php
    class conexion{

        var $conexion;

        function conexion(){

        }

        function conectar(){
            include("../config.php");
            $this->conexion = mysqli_connect($Servidor,$User,$Password,$BaseDeDatos);
            if(!$this->conexion)
                echo 'Error en la conexion a la base de datos';
        }

        function query($consulta,$valor){
            $recordset = mysqli_query($this->conexion,$consulta);
            if($valor==1){
                while($linea = mysqli_fetch_array($recordset)){
                    $data[] = $linea;
                }
            }else{
                $data[] = "";
            }
            $datos = isset($data) ? $data:NULL;
            if($datos)
                return $datos;
        }

        function desconectar(){
            mysqli_close($this->conexion);
        }
    }
    
?>