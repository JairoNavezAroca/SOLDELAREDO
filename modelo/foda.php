<?php
    include("conexion.php");
    class foda{

        function foda(){

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

        function registrarFoda($annio){
            $sql = "INSERT INTO FODA(annio) VALUES('$annio');";
            $this->query($sql);
        }

        function eliminarFoda($idFoda,$idFortaleza,$idDebilidad,$idOportunidad,$idAmenaza){
            $sql = "DELETE FROM EFOF WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
            $sql = "DELETE FROM EFAF WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
            $sql = "DELETE FROM Fortalezas WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
            $sql = "DELETE FROM EDOD WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
            $sql = "DELETE FROM EDAD WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
            $sql = "DELETE FROM Debilidades WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
            $sql = "DELETE FROM EFOO WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
            $sql = "DELETE FROM EDOO WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
            $sql = "DELETE FROM Oportunidades WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
            $sql = "DELETE FROM EAFA WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
            $sql = "DELETE FROM EDAA WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
            $sql = "DELETE FROM Amenazas WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
            $sql = "DELETE FROM FODA WHERE idFoda='$idFoda';";
            $this->query($sql);
        }

        function seleccionarFoda($idFoda){
            $sql = "SELECT * FROM FODA WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosFoda(){
            $sql = "SELECT * FROM FODA";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarFortaleza($descripcion,$idFoda){
            $sql = "INSERT INTO Fortalezas(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
        }

        function actualizarFortaleza($descripcion,$idFortaleza){
            $sql = "UPDATE Fortalezas SET descripcion='$descripcion' WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
        }

        function eliminarFortaleza($idFortaleza){
            $sql = "DELETE FROM EFOF WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
            $sql = "DELETE FROM EFAF WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
            $sql = "DELETE FROM Fortalezas WHERE idFortaleza='$idFortaleza';";
            $this->query($sql);
        }

        function seleccionarFortaleza($idFortaleza){
            $sql = "SELECT * FROM Fortalezas WHERE idFortaleza='$idFortaleza';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosFortaleza($idFoda){
            $sql = "SELECT * FROM Fortalezas  WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarDebilidad($descripcion,$idFoda){
            $sql = "INSERT INTO Debilidades(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
        }

        function actualizarDebilidad($descripcion,$idDebilidad){
            $sql = "UPDATE Debilidades SET descripcion='$descripcion' WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
        }

        function eliminarDebilidad($idDebilidad){
            $sql = "DELETE FROM EDOD WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
            $sql = "DELETE FROM EDAD WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
            $sql = "DELETE FROM Debilidades WHERE idDebilidad='$idDebilidad';";
            $this->query($sql);
        }

        function seleccionarDebilidad($idDebilidad){
            $sql = "SELECT * FROM Debilidades WHERE idDebilidad='$idDebilidad';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosDebilidad($idFoda){
            $sql = "SELECT * FROM Debilidades WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarOportunidad($descripcion,$idFoda){
            $sql = "INSERT INTO Oportunidades(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
        }

        function actualizarOportunidad($descripcion,$idOportunidad){
            $sql = "UPDATE Oportunidades SET descripcion='$descripcion' WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
        }

        function eliminarOportunidad($idOportunidad){
            $sql = "DELETE FROM EFOO WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
            $sql = "DELETE FROM EDOO WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
            $sql = "DELETE FROM Oportunidades WHERE idOportunidad='$idOportunidad';";
            $this->query($sql);
        }

        function seleccionarOportunidad($idOportunidad){
            $sql = "SELECT * FROM Oportunidades WHERE idOportunidad='$idOportunidad';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosOportunidad($idFoda){
            $sql = "SELECT * FROM Oportunidades WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarAmenaza($descripcion,$idFoda){
            $sql = "INSERT INTO Amenazas(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
        }

        function actualizarAmenaza($descripcion,$idAmenaza){
            $sql = "UPDATE Amenazas SET descripcion='$descripcion' WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
        }

        function eliminarAmenaza($idAmenaza){
            $sql = "DELETE FROM EAFA WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
            $sql = "DELETE FROM EDAA WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
            $sql = "DELETE FROM Amenazas WHERE idAmenaza='$idAmenaza';";
            $this->query($sql);
        }

        function seleccionarAmenaza($idAmenaza){
            $sql = "SELECT * FROM Amenazas WHERE idAmenaza='$idAmenaza';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosAmenaza($idFoda){
            $sql = "SELECT * FROM Amenazas WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarEstrategiaFO($descripcion,$idFoda,$fortalezas,$oportunidades){
            $sql = "INSERT INTO EstrategiasFO(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
            $sql = "SELECT MAX(idEstrategiaFO) FROM EstrategiasFO;";
            $id = $this->query1($sql);
            $idEstrategiaFO = $id[0][0];
            for ($i=0; $i < count($fortalezas) ; $i++) { 
                $sql = "INSERT INTO EFOF(idEstrategiaFO,idFortaleza) VALUES('$idEstrategiaFO','$fortalezas[$i]');";
                $this->query($sql);
            }
            for ($i=0; $i < count($oportunidades); $i++) { 
                $sql = "INSERT INTO EFOO(idEstrategiaFO,idOportunidad) VALUES('$idEstrategiaFO','$oportunidades[$i]');";
                $this->query($sql);
            }
        }

        function actualizarEstrategiaFO($descripcion,$idEstrategiaFO){
            $sql = "UPDATE EstrategiasFO SET descripcion='$descripcion' WHERE idEstrategiaFO='$idEstrategiaFO';";
            $this->query($sql);
        }

        function eliminarEstrategiaFO($idEstrategiaFO){
            $sql = "DELETE FROM EFOF WHERE idEstrategiaFO='$idEstrategiaFO';";
            $this->query($sql);
            $sql = "DELETE FROM EFOO WHERE idEstrategiaFO='$idEstrategiaFO';";
            $this->query($sql);
            $sql = "DELETE FROM EstrategiasFO WHERE idEstrategiaFO='$idEstrategiaFO';";
            $this->query($sql);
        }

        function seleccionarEstrategiaFO($idEstrategiaFO){
            $sql = "SELECT * FROM EstrategiasFO WHERE idEstrategiaFO='$idEstrategiaFO';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosEstrategiaFO($idFoda){
            $sql = "SELECT * FROM EstrategiasFO WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarEstrategiaFA($descripcion,$idFoda,$fortalezas,$amenazas){
            $sql = "INSERT INTO EstrategiasFA(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
            $sql = "SELECT MAX(idEstrategiaFA) FROM EstrategiasFA;";
            $id = $this->query1($sql);
            $idEstrategiaFA = $id[0][0];
            for ($i=0; $i < count($fortalezas) ; $i++) { 
                $sql = "INSERT INTO EFAF(idEstrategiaFA,idFortaleza) VALUES('$idEstrategiaFA','$fortalezas[$i]');";
                $this->query($sql);
            }
            for ($i=0; $i < count($amenazas); $i++) { 
                $sql = "INSERT INTO EAFA(idEstrategiaFA,idAmenaza) VALUES('$idEstrategiaFA','$amenazas[$i]');";
                $this->query($sql);
            }
        }

        function actualizarEstrategiaFA($descripcion,$idEstrategiaFA){
            $sql = "UPDATE EstrategiasFA SET descripcion='$descripcion' WHERE idEstrategiaFA='$idEstrategiaFA';";
            $this->query($sql);
        }

        function eliminarEstrategiaFA($idEstrategiaFA){
            $sql = "DELETE FROM EFAF WHERE idEstrategiaFA='$idEstrategiaFA';";
            $this->query($sql);
            $sql = "DELETE FROM EAFA WHERE idEstrategiaFA='$idEstrategiaFA';";
            $this->query($sql);
            $sql = "DELETE FROM EstrategiasFA WHERE idEstrategiaFA='$idEstrategiaFA';";
            $this->query($sql);
        }

        function seleccionarEstrategiaFA($idEstrategiaFA){
            $sql = "SELECT * FROM EstrategiasFA WHERE idEstrategiaFA='$idEstrategiaFA';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosEstrategiaFA($idFoda){
            $sql = "SELECT * FROM EstrategiasFA WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarEstrategiaDO($descripcion,$idFoda,$debilidades,$oportunidades){
            $sql = "INSERT INTO EstrategiasDO(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
            $sql = "SELECT MAX(idEstrategiaDO) FROM EstrategiasDO;";
            $id = $this->query1($sql);
            $idEstrategiaDO = $id[0][0];
            for ($i=0; $i < count($oportunidades); $i++) { 
                $sql = "INSERT INTO EDOO(idEstrategiaDO,idOportunidad) VALUES('$idEstrategiaDO','$oportunidades[$i]');";
                $this->query($sql);
            }
            for ($i=0; $i < count($debilidades); $i++) { 
                $sql = "INSERT INTO EDOD(idEstrategiaDO,idDebilidad) VALUES('$idEstrategiaDO','$debilidades[$i]');";
                $this->query($sql);
            }
        }

        function actualizarEstrategiaDO($descripcion,$idEstrategiaDO){
            $sql = "UPDATE EstrategiasDO SET descripcion='$descripcion' WHERE idEstrategiaDO='$idEstrategiaDO';";
            $this->query($sql);
        }

        function eliminarEstrategiaDO($idEstrategiaDO){
            $sql = "DELETE FROM EDOO WHERE idEstrategiaDO='$idEstrategiaDO';";
            $this->query($sql);
            $sql = "DELETE FROM EDOD WHERE idEstrategiaDO='$idEstrategiaDO';";
            $this->query($sql);
            $sql = "DELETE FROM EstrategiasDO WHERE idEstrategiaDO='$idEstrategiaDO';";
            $this->query($sql);
        }

        function seleccionarEstrategiaDO($idEstrategiaDO){
            $sql = "SELECT * FROM EstrategiasDO WHERE idEstrategiaDO='$idEstrategiaDO';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosEstrategiaDO($idFoda){
            $sql = "SELECT * FROM EstrategiasDO WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function registrarEstrategiaDA($descripcion,$idFoda,$debilidades,$amenazas){
            $sql = "INSERT INTO EstrategiasDA(descripcion,idFoda) VALUES('$descripcion','$idFoda');";
            $this->query($sql);
            $sql = "SELECT MAX(idEstrategiaDA) FROM EstrategiasDA;";
            $id = $this->query1($sql);
            $idEstrategiaDA = $id[0][0];
            for ($i=0; $i < count($debilidades); $i++) { 
                $sql = "INSERT INTO EDAD(idEstrategiaDA,idDebilidad) VALUES('$idEstrategiaDA','$debilidades[$i]');";
                $this->query($sql);
            }
            for ($i=0; $i < count($amenazas); $i++) { 
                $sql = "INSERT INTO EDAA(idEstrategiaDA,idAmenaza) VALUES('$idEstrategiaDA','$amenazas[$i]');";
                $this->query($sql);
            }
        }

        function actualizarEstrategiaDA($descripcion,$idEstrategiaDA){
            $sql = "UPDATE EstrategiasDA SET descripcion='$descripcion' WHERE idEstrategiaDA='$idEstrategiaDA';";
            $this->query($sql);
        }

        function eliminarEstrategiaDA($idEstrategiaDA){
            $sql = "DELETE FROM EDAD WHERE idEstrategiaDA='$idEstrategiaDA';";
            $this->query($sql);
            $sql = "DELETE FROM EDAA WHERE idEstrategiaDA='$idEstrategiaDA';";
            $this->query($sql);
            $sql = "DELETE FROM EstrategiasDA WHERE idEstrategiaDA='$idEstrategiaDA';";
            $this->query($sql);
        }

        function seleccionarEstrategiaDA($idEstrategiaDA){
            $sql = "SELECT * FROM EstrategiasDA WHERE idEstrategiaDA='$idEstrategiaDA';";
            $datos = $this->query1($sql);
            return $datos;
        }

        function seleccionarTodosEstrategiaDA($idFoda){
            $sql = "SELECT * FROM EstrategiasDA WHERE idFoda='$idFoda';";
            $datos = $this->query1($sql);
            return $datos;
        }
    }
?>