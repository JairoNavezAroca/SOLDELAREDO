<?php
	include("../conexion.php");	
	$idmejora = isset($_POST['idmejora']) ? $_POST['idmejora'] : NULL;
	$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : NULL ;
	$diagnostico = isset($_POST['diagnostico']) ? $_POST['diagnostico'] : NULL;
	$recomendacion = isset($_POST['recomendacion']) ? $_POST['recomendacion'] : NULL;
	$idproceso = isset($_POST['idproceso']) ? $_POST['idproceso'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;


	if ($accion=="nuevo") {
		$query= "INSERT INTO MejoraProcesos (idProceso,fecha, diagnostico,recomendacion) values('$idproceso','$fecha','$diagnostico','$recomendacion')";
		$rs_query= $conexion->query($query);
		echo "Datos guardados correctamente"; 
	}

	if ($accion=="modificar") {
		$query="UPDATE MejoraProcesos SET diagnostico='$diagnostico', recomendacion='$recomendacion' WHERE idMejoraProceso='$idmejora'";
		$rs_query=$conexion->query($query);
		echo "Datos actualizados correctamente"; 
	}

	if($accion=="eliminar"){
	//	$query = "DELETE FROM Tareas WHERE idproceso='$idproceso'";
	//	$rs_query = $conexion->query($query);
		$query = "DELETE FROM MejoraProcesos WHERE idMejoraProceso='$idmejora'";
		$rs_query= $conexion->query($query);
		echo "Registro eliminado con exito"; 
	}

	if($accion=="obtenerMejora"){
		if(isset($_POST['idmejora'])) {
		    $query = "SELECT P.proceso as proceso, MP.idProceso as idproceso, MP.fecha as fecha, MP.diagnostico as diagnostico, MP.recomendacion as recomendacion, MP.idMejoraProceso as idMejoraProceso FROM MejoraProcesos MP JOIN Procesos P ON MP.idProceso=P.idProceso where idMejoraProceso='$idmejora'";
		    $rs_query =$conexion->query($query) ;

		    if (!$rs_query) {
				die('Query Failed.');
			}

		    $json = array();
		    while($row = mysqli_fetch_array($rs_query)) {
		      $json[] = array(
		      	'proceso' => $row['proceso'],
		      	'idproceso' => $row['idproceso'],
		      	'fecha' => $row['fecha'],
		        'diagnostico' => $row['diagnostico'],
		        'recomendacion' => $row['recomendacion'],
		        'idmejora' => $row['idMejoraProceso'],
		      );
		    }
		    $jsonstring = json_encode($json[0]);
		    echo $jsonstring;
	  		}
	}


	if($accion == "obtenerMejoras"){
		  	$query = "SELECT P.proceso as proceso, MP.idProceso as idproceso, MP.fecha as fecha, MP.diagnostico as diagnostico, MP.recomendacion as recomendacion, MP.idMejoraProceso as idMejoraProceso FROM MejoraProcesos MP JOIN Procesos P ON MP.idProceso=P.idProceso";
		  	$rs_query =$conexion->query($query) ;

		  	if (!$rs_query) {
				die('Query Failed.');
			}

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		    	'proceso' => $row['proceso'],
		        'idproceso' => $row['idproceso'],
		      	'fecha' => $row['fecha'],
		        'diagnostico' => $row['diagnostico'],
		        'recomendacion' => $row['recomendacion'],
		        'idmejora' => $row['idMejoraProceso'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}

?>

