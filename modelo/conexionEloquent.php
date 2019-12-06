<?php
	include("../config.php");
	require_once '../vendor/autoload.php';
	use Illuminate\Database\Capsule\Manager as Capsule;
	$capsule = new Capsule;
	$capsule->addConnection([
		'driver' =>'mysql',
		'host' => $Servidor,
		'database' => $BaseDeDatos,
		'username' => $User,
		'password' => $Password,
		'charset' => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' => '',
	]);
	$capsule->bootEloquent();
?>

<?php 

	function esValido($cadena,$tam=6){
		$vocales = 0;
		$consonantes = 0;
		foreach (count_chars($cadena, 1) as $i => $val) {
			if (preg_match('/[aeiouáéíóúü]/i',chr($i))){
	        	$vocales = $vocales + $val;
			}
			else if (preg_match('/[a-z]/i',chr($i))){
				$consonantes = $consonantes + $val;
			}
		}
		$total = $vocales + $consonantes;
		return ($total) >= $tam;
	}

	function esValidoNumeros($cadena,$tam=6){
		foreach (count_chars($cadena, 1) as $i => $val) {
			if (preg_match('/[0123456789]/i',chr($i))){
	        	;
			}
			else
				return false;
		}
		if (strlen($cadena) < $tam)
			return false;
		return true;
	}
 ?>