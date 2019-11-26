<?php

include("../conexion.php");

$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT P.proceso as proceso, MP.idProceso as idproceso, OI.fecha as fecha, OI.propuesta as propuesta, OI.actividades as actividades, OI.nroDocumento as nrodocumento, OI.docRelacionados as docrelacionados, OI.observaciones as observaciones, OI.idOrden as idOrden, OI.DniPersonal as dnipersonal, OI.cargo as cargo FROM OrdenDeImplementacion OI JOIN mejoraprocesos MP on OI.idMejoraProceso=MP.idMejoraProceso JOIN procesos P ON P.idProceso=MP.idProceso WHERE OI.propuesta LIKE '$search%' or OI.dniPersonal LIKE '$search%'";
  $rs_query = $conexion->query($query);
  
  if(!$rs_query) {
    die('Query Error' . mysqli_error($conexion));
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