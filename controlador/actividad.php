<?php
	include("../conexion.php");	
	$idproceso = isset($_POST['idproceso']) ? $_POST['idproceso'] : NULL; 
	$idtarea = isset($_POST['idtarea']) ? $_POST['idtarea'] : NULL; 
	$actividad = isset($_POST['actividad']) ? $_POST['actividad'] : NULL; 
	$idactividad = isset($_POST['idactividad']) ? $_POST['idactividad'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;


	if ($accion=="nuevo") {
		$query= "INSERT INTO Actividades (idTarea,idProceso, actividad) values('$idtarea','$idproceso','$actividad')";
		$rs_query= $conexion->query($query);
		echo "Datos guardados correctamente"; 
	}

	if ($accion=="modificar") {
		$query="UPDATE Actividades SET actividad='$actividad' WHERE idActividad='$idactividad'";
		$rs_query=$conexion->query($query);
		echo "Datos actualizados correctamente"; 
	}

	if($accion=="eliminar"){
	//	$query = "DELETE FROM Tareas WHERE idproceso='$idproceso'";
	//	$rs_query = $conexion->query($query);
		$query = "DELETE FROM Actividades WHERE idActividad='$idactividad'";
		$rs_query= $conexion->query($query);
		echo "Registro eliminado correctamente"; 
	}

	if($accion=="obtenerActividad"){
		if(isset($_POST['idactividad'])) {
		    $query = "SELECT * from Actividades where idActividad='$idactividad'";
		    $rs_query =$conexion->query($query);
		    $json = array();
		    while($row = mysqli_fetch_array($rs_query)) {
		     	$json[] = array(
		     	'idtarea' => $row['idTarea'],
		        'actividad' => $row['actividad'],
		        'idactividad' => $row['idActividad']
		      );
		    }
		    $jsonstring = json_encode($json[0]);
		    echo $jsonstring;
	  		}
	}

	if($accion == "obtenerActividades"){
		  	$query = "SELECT * FROM Actividades WHERE idTarea='$idtarea'";
		  	$rs_query =$conexion->query($query) ;

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		        'idtarea' => $row['idTarea'],
		        'actividad' => $row['actividad'],
		        'idactividad' => $row['idActividad'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}

	if (!$rs_query) {
		die('Query Failed.');
	}
?>

