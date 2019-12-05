<?php
	include("../conexion.php");	
	$idlista = isset($_POST['idlista']) ? $_POST['idlista'] : NULL; 
	$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : NULL; 
	$versiones = isset($_POST['versiones']) ? $_POST['versiones'] : NULL;
	$accion = isset($_POST['accion']) ? $_POST['accion']:NULL;

	if($accion == "obtenerListas"){
		  	$query = "SELECT * FROM ListaProcesos";
		  	$rs_query =$conexion->query($query) ;

		  	if (!$rs_query) {
				die('Query Failed.');
			}

		  	$json = array();
		  	while($row = mysqli_fetch_array($rs_query)) {
		    	$json[] = array(
		        'idlista' => $row['idlista'],
		        'fecha' => $row['fecha'],
		        'versiones' => $row['version'],
		    );
			}

		  	$jsonstring = json_encode($json);
		  	echo $jsonstring;
	}

?>

