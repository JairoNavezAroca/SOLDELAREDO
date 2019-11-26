<?php
    include("conexion.php");
    class aspectos{

        function aspectos(){

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

        function registrar($mision,$vision,$valor,$factor,$objetivo){
            $sql = "INSERT INTO empresa(ruc,mision,vision,valor,factor,objetivo) VALUES('20132377783','$mision','$vision','$valor','$factor','$objetivo');";
            $this->query($sql);
        }

        function actualizar($mision,$vision,$valor,$factor,$objetivo){
            $sql = "UPDATE empresa SET mision='$mision',vision='$vision',valor='$valor',factor='$factor',objetivo='$objetivo' WHERE ruc='20132377783';";
            $this->query($sql);
        }

        function seleccionar(){
            $sql = "SELECT * FROM empresa";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>