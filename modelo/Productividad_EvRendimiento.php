<?php 
	require_once 'conexionEloquent.php';

	class EvRendimiento extends Illuminate\Database\Eloquent\Model {
		protected $table = 'evrendimiento';
		protected $fillable = ['IdEvRendimiento','DniPersonal'];
		protected $primaryKey = 'IdEvRendimiento';
		public $timestamps = false;

		static function agregar($DniPersonal){
			$er = new EvRendimiento();
			$er->DniPersonal = $DniPersonal;
			$er->save();
			return $er;
		}
	}
 ?>