<?php 
	require_once 'conexionEloquent.php';

	class DetalleEvRendimiento extends Illuminate\Database\Eloquent\Model {
		protected $table = 'detalleevrendimiento';
		protected $fillable = ['IdDetalleEvRendimiento','IdEvRendimiento','Observacion','Porcentaje','Fecha','Estado'];
		protected $primaryKey = 'IdDetalleEvRendimiento';
		public $timestamps = false;
		
		static function agregar($IdEvRendimiento,$Porcentaje,$Observacion,$Fecha){
			DetalleEvRendimiento::where('IdEvRendimiento', '=', $IdEvRendimiento)->update(['Estado' => false]);
			$der = new DetalleEvRendimiento();
			$der->IdEvRendimiento = $IdEvRendimiento;
			$der->Porcentaje = $Porcentaje;
			$der->Observacion = $Observacion;
			$der->Fecha = $Fecha;
			$der->Estado = true;
			$der->save();
		}
	}
 ?>