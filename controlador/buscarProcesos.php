<?php

include("../conexion.php");

$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM procesos WHERE proceso LIKE '$search%' or fecha LIKE '$search%'";
  $rs_query = $conexion->query($query);
  
  if(!$rs_query) {
    die('Query Error' . mysqli_error($conexion));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($rs_query)) {
    $json[] = array(
      'idproceso' => $row['idProceso'],
      'proceso' => $row['proceso'],
      'fecha' => $row['fecha'],
      'versiones' => $row['versiones']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}

?>