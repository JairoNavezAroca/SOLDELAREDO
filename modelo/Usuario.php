<?php 
	require_once 'conexionEloquent.php';

	class Usuario extends Illuminate\Database\Eloquent\Model {
		protected $table = 'usuario';
		protected $fillable = ['IdUsuario','Apellidos','Nombress','Email','Estado','Area'];
		protected $hidden = ['Contraseña','Pregunta','Respuesta'];
		protected $primaryKey = 'IdUsuario';
		public $timestamps = false;

		static function ingresar($Email,$Contraseña){
			$u = Usuario::where('Email',$Email)->where('Estado',true)->first();
			if ($u == null)
				return false;
			return password_verify($Contraseña, $u->Contraseña);
		}
		static function validar($Email,$Pregunta,$Respuesta){
			$u = Usuario::where('Email',$Email)->where('Estado',true)->first();
			if ($u == null)
				return false;
			else{
				return ($u->Pregunta == $Pregunta && $u->Respuesta == $Respuesta);
			}
		}
		static function recuperar($Email,$C1,$C2){
			if ($C1 != $C2)
				return false;
			$u = Usuario::where('Email',$Email)->first();
			$u->Contraseña = password_hash($C1, PASSWORD_DEFAULT);
			$u->Save();
			return true;
		}
		static function registrar($IdUsuario,$Apellidos,$Nombres,$Email,$Contraseña,$Pregunta,$Respuesta,$Area){
			$res = Usuario::where('Email',$Email)->first();
			if ($res != null)
				return false;
			$u = new Usuario();
			$u->Apellidos = $Apellidos;
			$u->Nombres = $Nombres;
			$u->Email = $Email;
			$u->Contraseña = password_hash($Contraseña, PASSWORD_DEFAULT);
			$u->Pregunta = $Pregunta;
			$u->Respuesta = $Respuesta;
			$u->Area = $Area;
			$u->Estado = true;
			$u->save();
			return true;
		}
		static function modificar($IdUsuario,$Apellidos,$Nombres,$Email,$Contraseña,$Pregunta,$Respuesta,$Area){
			$u = Usuario::find($IdUsuario);
			if ($u->Email == $Email)
				return false;
			$u->Apellidos = $Apellidos;
			$u->Nombres = $Nombres;
			$u->Email = $Email;
			$u->Contraseña = password_hash($Contraseña, PASSWORD_DEFAULT);
			$u->Pregunta = $Pregunta;
			$u->Respuesta = $Respuesta;
			$u->Area = $Area;
			$u->save();
			return true;
		}
		static function deshabilitar($IdUsuario){
			$u = Usuario::find($IdUsuario);
			$u->Estado = false;
			$u->save();
			return true;
		}
		static function habilitar($IdUsuario){
			$u = Usuario::find($IdUsuario);
			$u->Estado = true;
			$u->save();
			return true;
		}
	}
 ?>

 <?php 
 /*
  $yy = password_hash("jnavez", PASSWORD_DEFAULT);
  //echo $yy;
  $bb = password_verify("jnavez", $yy);
  //var_dump($bb);
  */
?>