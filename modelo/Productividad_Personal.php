<?php 
	require_once 'conexionEloquent.php';

	class Personal extends Illuminate\Database\Eloquent\Model {
		protected $table = 'Personal';
		protected $fillable = ['DniPersonal','nombre','apellido','idarea'];
		protected $primaryKey = 'DniPersonal';
		public $timestamps = false;
	}
 ?>