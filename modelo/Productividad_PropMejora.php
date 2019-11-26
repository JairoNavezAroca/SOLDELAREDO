<?php 
	require_once 'conexionEloquent.php';

	class PropMejora extends Illuminate\Database\Eloquent\Model {
		protected $table = 'propmejora';
		protected $fillable = ['IdPropMejora','FechaRegistro'];
		protected $primaryKey = 'IdPropMejora';
		public $timestamps = false;

		static function agregar($Fecha){
			$pm = new PropMejora();
			$pm->FechaRegistro = $Fecha;
			$pm->save();
			return $pm;
		}
	}
 ?>