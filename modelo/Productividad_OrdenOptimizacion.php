<?php 
	require_once 'conexionEloquent.php';

	class OrdenOptimizacion extends Illuminate\Database\Eloquent\Model {
		protected $table = 'OrdenOptimizacion';
		protected $fillable = ['IdOrdenOptimizacion','IdPropMejora','FechaRegistro'];
		protected $primaryKey = 'IdOrdenOptimizacion';
		public $timestamps = false;

		static function agregar($Fecha,$IdPropMejora){
			$oo = new OrdenOptimizacion();
			$oo->FechaRegistro = $Fecha;
			$oo->IdPropMejora = $IdPropMejora;
			$oo->save();
			return $oo;
		}
	}
 ?>