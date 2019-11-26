<?php
	include("../conexion.php");	
	$idorden = isset($_POST['idorden']) ? $_POST['idorden'] : NULL;
	$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : NULL ;
	$propuesta = isset($_POST['propuesta']) ? $_POST['propuesta'] : NULL;
	$dni =  isset($_POST['dni']) ? $_POST['dni'] : NULL;
	$cargo =  isset($_POST['cargo']) ? $_POST['cargo'] : NULL;
	$idmejora = isset($_POST['idmejora']) ? $_POST['idmejora'] : NULL;
	$actividades =  isset($_POST['actividades']) ? $_POST['actividades'] : NULL;
	$docrelacionados =  isset($_POST['docrelacionados']) ? $_POST['docrelacionados'] : NULL;
	$observaciones =  isset($_POST['observaciones']) ? $_POST['observaciones'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;


	if ($accion=="nuevo") {
		$query= "INSERT INTO OrdenDeImplementacion (idMejoraProceso,fecha, propuesta,actividades, DniPersonal, cargo, docRelacionados, observaciones) values('$idmejora','$fecha','$propuesta','$actividades','$dni', '$cargo','$docrelacionados','$observaciones')";
		$rs_query= $conexion->query($query);
		if (!$rs_query) {
			die('Query Failed.');
		}
		echo "Datos guardados correctamente"; 
	}

	if ($accion=="modificar") {
		$query="UPDATE OrdenDeImplementacion SET fecha='$fecha', propuesta='$propuesta', actividades='$actividades', cargo='$cargo', docRelacionados='$docrelacionados', observaciones='$observaciones' WHERE idOrden='$idorden'";
		$rs_query=$conexion->query($query);
			if (!$rs_query) {
				die('Query Failed.');
			}
		echo "Datos actualizados correctamente"; 
	}

	if($accion=="eliminar"){
	//	$query = "DELETE FROM Tareas WHERE idproceso='$idproceso'";
	//	$rs_query = $conexion->query($query);
		$query = "DELETE FROM OrdenDeImplementacion WHERE idOrden='$idorden'";
		$rs_query= $conexion->query($query);
		echo "Registro eliminado con exito"; 
	}

	if($accion=="obtenerOrden"){
		if(isset($_POST['idorden'])) {
		    $query = "SELECT P.proceso as proceso, MP.idProceso as idproceso, OI.fecha as fecha, OI.propuesta as propuesta, OI.actividades as actividades, OI.nroDocumento as nrodocumento, OI.docRelacionados as docrelacionados, OI.observaciones as observaciones, OI.idOrden as idOrden, OI.DniPersonal as dnipersonal, OI.cargo as cargo FROM OrdenDeImplementacion OI JOIN mejoraprocesos MP on OI.idMejoraProceso=MP.idMejoraProceso JOIN procesos P ON P.idProceso=MP.idProceso where idOrden='$idorden'";
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
		      	'dni' => $row['dnipersonal'],
		      	'cargo' => $row['cargo'],
		        'propuesta' => $row['propuesta'],
		        'actividades' => $row['actividades'],
		        'docrelacionados' => $row['docrelacionados'],
		        'observaciones' => $row['observaciones'],
		        'idorden' => $row['idOrden'],
		      );
		    }
		    $jsonstring = json_encode($json[0]);
		    echo $jsonstring;
	  		}
	}


	if($accion == "obtenerOrdenes"){
		  	$query = "SELECT P.proceso as proceso, MP.idProceso as idproceso, OI.fecha as fecha, OI.propuesta as propuesta, OI.actividades as actividades, OI.nroDocumento as nrodocumento, OI.docRelacionados as docrelacionados, OI.observaciones as observaciones, OI.idOrden as idOrden, OI.DniPersonal as dnipersonal, OI.cargo as cargo FROM OrdenDeImplementacion OI JOIN MejoraProcesos MP on OI.idMejoraProceso=MP.idMejoraProceso JOIN Procesos P ON P.idProceso=MP.idProceso";
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
		      	'dni' => $row['dnipersonal'],
		      	'cargo' => $row['cargo'],
		        'propuesta' => $row['propuesta'],
		        'actividades' => $row['actividades'],
		        'docrelacionados' => $row['docrelacionados'],
		        'observaciones' => $row['observaciones'],
		        'idorden' => $row['idOrden'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}

?>

