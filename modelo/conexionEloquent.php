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