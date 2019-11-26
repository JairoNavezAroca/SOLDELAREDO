<?php 
	require_once 'conexionEloquent.php';

	class DetallePropMejora extends Illuminate\Database\Eloquent\Model {
		protected $table = 'detallepropmejora';
		protected $fillable = ['IdDetallePropMejora','Detalle','IdPropMejora','Fecha','Estado','Titulo'];
		protected $primaryKey = 'IdDetallePropMejora';
		public $timestamps = false;
		
		static function agregar($IdPropMejora,$Titulo,$Detalle,$Fecha){
			DetallePropMejora::where('IdPropMejora', '=', $IdPropMejora)->update(['Estado' => false]);
			$dpm = new DetallePropMejora();
			$dpm->IdPropMejora = $IdPropMejora;
			$dpm->Titulo = $Titulo;
			$dpm->Detalle = $Detalle;
			$dpm->Fecha = $Fecha;
			$dpm->Estado = true;
			$dpm->save();
		}
	}
 ?>