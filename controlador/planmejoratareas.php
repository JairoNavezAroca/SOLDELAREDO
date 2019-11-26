<?php
	include("../conexion.php");	
	$idproceso = isset($_POST['idproceso']) ? $_POST['idproceso'] : NULL;
	$idmejora = isset($_POST['idmejora']) ? $_POST['idmejora'] : NULL;
	$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : NULL ;
	$diagnostico = isset($_POST['diagnostico']) ? $_POST['diagnostico'] : NULL;
	$causa = isset($_POST['causa']) ? $_POST['causa'] : NULL;
	$recomendacion = isset($_POST['recomendacion']) ? $_POST['recomendacion'] : NULL;
	$idtarea = isset($_POST['idtarea']) ? $_POST['idtarea'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;


	if ($accion=="nuevo") {
		$query= "INSERT INTO MejoraTareas (idTarea, idProceso,fecha, diagnostico, causa, recomendacion) values('$idtarea','$idproceso','$fecha','$diagnostico','$causa','$recomendacion')";
		$rs_query= $conexion->query($query);
		echo "Datos guardados correctamente"; 
	}

	if ($accion=="modificar") {
		$query="UPDATE MejoraTareas SET diagnostico='$diagnostico', causa='$causa', recomendacion='$recomendacion' WHERE idMejoraTarea='$idmejora'";
		$rs_query=$conexion->query($query);
		echo "Datos actualizados con exito"; 
	}

	if($accion=="eliminar"){
	//	$query = "DELETE FROM Tareas WHERE idproceso='$idproceso'";
	//	$rs_query = $conexion->query($query);
		$query = "DELETE FROM MejoraTareas WHERE idMejoraTarea='$idmejora'";
		$rs_query= $conexion->query($query);
		echo "Registro eliminado con exito"; 
	}

	if($accion=="obtenerMejora"){
		if(isset($_POST['idmejora'])) {
		    $query = "SELECT T.Tarea as Tarea, MP.idTarea as idTarea, MP.fecha as fecha, MP.diagnostico as diagnostico, MP.causa as causa, MP.recomendacion as recomendacion, MP.idMejoraTarea as idMejoraTarea FROM MejoraTareas MP JOIN Tareas T ON MP.idTarea=T.idTarea where idMejoraTarea='$idmejora'";
		    $rs_query =$conexion->query($query) ;

		    if (!$rs_query) {
				die('Query Failed.');
			}

		    $json = array();
		    while($row = mysqli_fetch_array($rs_query)) {
		      $json[] = array(
		      	'tarea' => $row['Tarea'],
		      	'idtarea' => $row['idTarea'],
		      	'fecha' => $row['fecha'],
		        'diagnostico' => $row['diagnostico'],
		        'causa' => $row['causa'],
		        'recomendacion' => $row['recomendacion'],
		        'idmejora' => $row['idMejoraTarea'],
		      );
		    }
		    $jsonstring = json_encode($json[0]);
		    echo $jsonstring;
	  		}
	}


	if($accion == "obtenerMejoras"){
		  	$query = "SELECT T.Tarea as Tarea, MP.idTarea as idTarea, MP.fecha as fecha, MP.diagnostico as diagnostico, MP.causa as causa, MP.recomendacion as recomendacion, MP.idMejoraTarea as idMejoraTarea FROM MejoraTareas MP JOIN Tareas T ON MP.idTarea=T.idTarea WHERE MP.idProceso='$idproceso'";
		  	$rs_query =$conexion->query($query) ;

		  	if (!$rs_query) {
				die('Query Failed.');
			}

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		    	'tarea' => $row['Tarea'],
		        'idtarea' => $row['idTarea'],
		      	'fecha' => $row['fecha'],
		        'diagnostico' => $row['diagnostico'],
		        'causa' => $row['causa'],
		        'recomendacion' => $row['recomendacion'],
		        'idmejora' => $row['idMejoraTarea'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}

?>

