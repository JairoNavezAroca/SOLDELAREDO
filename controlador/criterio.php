<?php
	include("../conexion.php");	
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;

	if($accion == "obtenerCriterios"){
		  	$query = "SELECT * FROM CriteriosDeCalificacion";
		  	$rs_query =$conexion->query($query);

		   if (!$rs_query) {
				die('Query Failed.');
			}

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		    	'idcriterio' => $row['idcriterio'],
		        'criterio' => $row['criterio'],
			    'descripcion' => $row['descripcion'],
			    'peso' => $row['peso'],
		    	);
		  	}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}
?>

