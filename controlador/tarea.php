<?php
	include("../conexion.php");	
	$idproceso = isset($_POST['idproceso']) ? $_POST['idproceso'] : NULL; 
	$idtarea = isset($_POST['idtarea']) ? $_POST['idtarea'] : NULL; 
	$tarea = isset($_POST['tarea']) ? $_POST['tarea'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
	$numero = isset($_POST['numero']) ? $_POST['numero'] : NULL ;
	$area = isset($_POST['area']) ? $_POST['area'] : NULL ;


	if ($accion=="nuevo") {
		$query = "SELECT MAX(idtarea) FROM Tareas WHERE idProceso = '$idproceso'";
		$rs_query = $conexion->query($query);
		$rs = $rs_query->fetch_row();
		$numero = $rs[0]+1;

		$query= "INSERT INTO Tareas (idProceso, numero, Tarea, area) values('$idproceso','$numero','$tarea', '$area')";
		$rs_query= $conexion->query($query);
		echo "Datos guardados correctamente"; 
	}

	if ($accion=="modificar") {
		$query="UPDATE Tareas SET Tarea='$tarea', numero='$numero', area='$area' WHERE idTarea='$idtarea'";
		$rs_query=$conexion->query($query);
		echo "Datos actualizados con exito"; 
	}

	if($accion=="eliminar"){
		$query = "DELETE FROM Actividades WHERE idTarea='$idtarea'";
		$rs_query = $conexion->query($query);
		$query = "DELETE FROM Tareas WHERE idTarea='$idtarea'";
		$rs_query= $conexion->query($query);
		echo "Registro eliminado con exito"; 
	}

	if($accion=="obtenerTarea"){
		if(isset($_POST['idtarea'])) {
		    $query = "SELECT * from Tareas where idTarea='$idtarea'";
		    $rs_query =$conexion->query($query);
		    $json = array();
		    while($row = mysqli_fetch_array($rs_query)) {
		     	$json[] = array(
		     	'idtarea' => $row['idTarea'],
		        'tarea' => $row['Tarea'],
		        'numero' => $row['numero'],
		        'area' => $row['area'],
		      );
		    }
		    $jsonstring = json_encode($json[0]);
		    echo $jsonstring;
	  		}
	}

	if($accion == "obtenerTareas"){
		  	$query = "SELECT * FROM Tareas WHERE idProceso='$idproceso'";
		  	$rs_query =$conexion->query($query) ;

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		    	'idproceso' => $row['idProceso'],
		        'idtarea' => $row['idTarea'],
			    'tarea' => $row['Tarea'],
			    'numero' => $row['numero'],
		        'area' => $row['area'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}

	if (!$rs_query) {
		die('Query Failed.');
	}
?>

