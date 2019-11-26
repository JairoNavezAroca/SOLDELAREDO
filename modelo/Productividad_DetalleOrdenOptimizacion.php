<?php 
	require_once 'conexionEloquent.php';

	class DetalleOrdenOptimizacion extends Illuminate\Database\Eloquent\Model {
		protected $table = 'detalleordenoptimizacion';
		protected $fillable = ['IdDetalleOrdenOptimizacion','Fecha','Detalle','Estado','FechaRealizar','Respuesta','IdOrdenOptimizacion'];
		protected $primaryKey = 'IdDetalleOrdenOptimizacion';
		public $timestamps = false;
		
		static function agregar($IdOrdenOptimizacion,$Respuesta,$FechaRealizar,$Detalle,$Fecha){
			DetalleOrdenOptimizacion::where('IdOrdenOptimizacion', '=', $IdOrdenOptimizacion)->update(['Estado' => false]);
			$doo = new DetalleOrdenOptimizacion();
			$doo->IdOrdenOptimizacion = $IdOrdenOptimizacion;
			$doo->Respuesta = $Respuesta;
			$doo->FechaRealizar = $FechaRealizar;
			$doo->Detalle = $Detalle;
			$doo->Fecha = $Fecha;
			$doo->Estado = true;
			$doo->save();
		}
	}
 ?>