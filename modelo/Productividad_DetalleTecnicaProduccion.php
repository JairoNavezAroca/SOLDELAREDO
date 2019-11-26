<?php 
	require_once 'conexionEloquent.php';

	class DetalleTecnicaProduccion extends Illuminate\Database\Eloquent\Model {
		protected $table = 'detalletecnicaproduccion';
		protected $fillable = ['IdDetalleTecnica','IdTecnica','Detalle','Titulo','Fecha','Estado'];
		protected $primaryKey = 'IdDetalleTecnica';
		public $timestamps = false;
		
		static function agregar($IdTecnica,$Titulo,$Detalle,$Fecha){
			DetalleTecnicaProduccion::where('IdTecnica', '=', $IdTecnica)->update(['Estado' => false]);
			$dtp = new DetalleTecnicaProduccion();
			$dtp->IdTecnica = $IdTecnica;
			$dtp->Titulo = $Titulo;
			$dtp->Detalle = $Detalle;
			$dtp->Fecha = $Fecha;
			$dtp->Estado = true;
			$dtp->save();
		}
	}
 ?>