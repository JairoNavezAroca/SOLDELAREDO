<?php 
	require_once 'conexionEloquent.php';

	class Area extends Illuminate\Database\Eloquent\Model {
		protected $table = 'area';
		protected $fillable = ['idarea','nombre'];
		protected $primaryKey = 'idarea';
		public $timestamps = false;
	}
 ?>