<?php
	include("../conexion.php");	
	$idproceso = isset($_POST['idproceso']) ? $_POST['idproceso'] : NULL; 
	$proceso = isset($_POST['proceso']) ? $_POST['proceso'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;
	$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : NULL ;
	$tipoproceso = isset($_POST['tipoproceso']) ? $_POST['tipoproceso'] : NULL ;

	if ($accion=="nuevo") {
		$versiones = '1';
		$query= "INSERT INTO Procesos (proceso, fecha, versiones,tipoproceso) values('$proceso','$fecha','$versiones','$tipoproceso')";
		$rs_query= $conexion->query($query);
		if (!$rs_query) {
				die('Query Failed.');
		} else
		echo "Datos guardados correctamente";
	}

	if ($accion=="modificar") {
		$query="UPDATE Procesos SET proceso='$proceso', tipoproceso='$tipoproceso' WHERE idProceso='$idproceso'";
		$rs_query=$conexion->query($query);
		echo "Datos actualizados con exito"; 
	}

	if($accion=="eliminar"){
		$query = "DELETE FROM MejoraProcesos WHERE idProceso='$idproceso'";
		$rs_query = $conexion->query($query);
		$query = "DELETE FROM MejoraTareas WHERE idProceso='$idproceso'";
		$rs_query = $conexion->query($query);
		$query = "DELETE FROM Actividades WHERE idProceso='$idproceso'";
		$rs_query = $conexion->query($query);
		$query = "DELETE FROM Tareas WHERE idProceso='$idproceso'";
		$rs_query = $conexion->query($query);
		$query = "DELETE FROM Procesos WHERE idProceso='$idproceso'";
		$rs_query= $conexion->query($query);
		if (!$rs_query) {
			die('Ocurrio un error al eliminar registro.');
		}else
			echo "Registro eliminado con exito"; 
	}

	if($accion=="obtenerProceso"){
		if(isset($_POST['idproceso'])) {
		    $query = "SELECT * from Procesos where idProceso='$idproceso'";
		    $rs_query =$conexion->query($query) ;
		   	if (!$rs_query) {
				die('Query Failed.');
			}

		    $json = array();
		    while($row = mysqli_fetch_array($rs_query)) {
		      $json[] = array(
		        'proceso' => $row['proceso'],
		        'idproceso' => $row['idProceso'],
		        'tipoproceso' => $row['tipoproceso'],
		      );
		    }
		    $jsonstring = json_encode($json[0]);
		    echo $jsonstring;
	  		}
	}


	if($accion == "obtenerProcesos"){
		  	$query = "SELECT * FROM Procesos";
		  	$rs_query =$conexion->query($query) ;

		  	if (!$rs_query) {
				die('Query Failed.');
			}

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		        'idproceso' => $row['idProceso'],
			    'proceso' => $row['proceso'],
			    'fecha' => $row['fecha'],
		        'versiones' => $row ['versiones'],
		        'tipoproceso' => $row['tipoproceso'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}
?>

