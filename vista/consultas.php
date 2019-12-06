<?php
	 function abrirConexion(){
 		global $conexion;
 		//include("configuracion.php");
	 	//$conexion=Mysqli_connect($server,$user,$password,$nombreBD);
 		include("../config.php");
 		$conexion=Mysqli_connect($Servidor,$User,$Password,$BaseDeDatos);
	 	mysqli_set_charset($conexion,'utf8');
 	}
 		function EjecutarConsulta($query){
 				abrirConexion();
 			global $conexion;
 			return mysqli_query($conexion,$query);
 		}
 		function ListarAreas(){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM area");
 			return $sql->fetch_all();/*DEVUELVE TODOS LOS VALORES(TODAS LAS FILAS Y COLUMNAS) */

 		}
 				function ListarArea($idarea){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM area where idarea=$idarea");
 			return mysqli_fetch_array($sql);

 		}
 		function ListarPersonal($idarea){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM Personal where idarea=$idarea");
 			return $sql->fetch_all();
 		}

 		function EliminarPersonal($dni){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"DELETE FROM Personal where DniPersonal=$dni");
 			return mysqli_fetch_array($sql);

 		}
 		
 		function BuscarPersonaDni($dni){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM Personal where DniPersonal=$dni");
 			return mysqli_fetch_array($sql);
 		}

 		 	function ListarPersonalDni($dni){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM Personal where DniPersonal=$dni");
 			return mysqli_fetch_array($sql);
 		}
 			function ListarAsistencias($inicio,$fin){
 			abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM asistencias where fecha between '$inicio' and '$fin' order by fecha asc");
 			return $sql->fetch_all();
 		}
 			function ListarCapacitaciones($idarea){
 				abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM capacitaciones where idarea=$idarea ");
 			return $sql->fetch_all();

 			}

 			function ListarNormas(){
 				abrirConexion();
 			global $conexion;
 			$sql=mysqli_query($conexion,"SELECT * FROM normasseguridad ");
 			return $sql->fetch_all();


 			}
?>