<?php 
	require_once 'conexionEloquent.php';

	class TecnicaProduccion extends Illuminate\Database\Eloquent\Model {
		protected $table = 'tecnicaproduccion';
		protected $fillable = ['IdTecnica','FechaRegistro'];
		protected $primaryKey = 'IdTecnica';
		public $timestamps = false;

		static function agregar($Fecha){
			$tp = new TecnicaProduccion();
			$tp->FechaRegistro = $Fecha;
			$tp->save();
			return $tp;
		}
	}
 ?>