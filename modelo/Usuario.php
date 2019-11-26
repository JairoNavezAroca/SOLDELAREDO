<?php 
	require_once 'conexionEloquent.php';

	class Usuario extends Illuminate\Database\Eloquent\Model {
		protected $table = 'usuario';
		protected $fillable = ['IdUsuario','Apellidos','Nombress','Email','Estado'];
		protected $hidden = ['Contraseña','Pregunta','Respuesta'];
		protected $primaryKey = 'IdUsuario';
		public $timestamps = false;

		static function ingresar($Email,$Contraseña){
			$u = Usuario::where('Email',$Email)->first();
			if ($u == null)
				return false;
			return password_verify($Contraseña, $u->Contraseña);
		}
		static function validar($Email,$Pregunta,$Respuesta){
			$u = Usuario::where('Email',$Email)->first();
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
		static function registrar($IdUsuario,$Apellidos,$Nombres,$Email,$Contraseña,$Pregunta,$Respuesta){
			$res = Usuario::where('Email',$Email)->first();
			if ($res != null)
				return false;
			$u = new Usuario();
			$u->Apellidos = $Apellidos;
			$u->Nombres = $Nombres;
			$u->Email = $Email;
			$u->Contraseña = $Contraseña;
			$u->Pregunta = $Pregunta;
			$u->Respuesta = $Respuesta;
			$u->save();
			return true;
		}
		static function modificar($IdUsuario,$Apellidos,$Nombres,$Email,$Contraseña,$Pregunta,$Respuesta){
			$u = Usuario::find($IdUsuario);
			if ($u->Email == $Email)
				return false;
			$u->Apellidos = $Apellidos;
			$u->Nombres = $Nombres;
			$u->Email = $Email;
			$u->Contraseña = $Contraseña;
			$u->Pregunta = $Pregunta;
			$u->Respuesta = $Respuesta;
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