<?php
include("consultas.php");
	date_default_timezone_set('America/Lima');
	$mi_select=$_POST['mi_select'];
	$dnis=$_POST['dni'];
	$currDate=Date("Y-m-d");
	$horaE=$_POST['HoraE'];
	$horaS=$_POST['HoraS'];
    ///$horasN->format("H:i:s");

	for ($i=0; $i <sizeof($dnis) ; $i++) { 
		//echo $mi_select[$i];
		$hora1=new DateTime($horaE[$i]);
		$hora2=new DateTime($horaS[$i]);
		$diferencia =$hora1->diff($hora2);
		$he=$diferencia->h-9;
		if ($mi_select[$i]=='A') {
			if ($he>0) {
			$sql="INSERT INTO asistencias(fecha,tipo,horaEntrada,horaSalida,DniPersonal,Extras) values('$currDate','A','$horaE[$i]','$horaS[$i]','$dnis[$i]',$he)";
			}else{
				//NO HAY HORAS EXTRAS
			$sql="INSERT INTO asistencias(fecha,tipo,horaEntrada,horaSalida,DniPersonal,HorasMenos) values('$currDate','A','$horaE[$i]','$horaS[$i]','$dnis[$i]',$he)";
			}
		}else{
			$sql="INSERT INTO asistencias(fecha,tipo,DniPersonal) values('$currDate','F','$dnis[$i]')";
		}
		EjecutarConsulta($sql);
	}
	header("Location:asistencias.php");	

?>

