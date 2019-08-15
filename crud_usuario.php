
<?php
	require_once('conexion.php');
	require_once('Usuario.php');
	

	class crud_usuario{

		public function __construct(){}

		public function insertar($usuario){
			$DB=basededatos::conectar();
			$insertar=$DB->prepare("INSERT INTO  VALUES(:usu,:pass) ");//COMPLETAR
			//$insertar->bindValue('usu',$usuario->);//COMPLETAR
			//ENCRIPTAR LA CLAVE
			$passwordIncriptada=password_hash($usuario->getpasswordUsu, PASSWORD_DEFAULT);
			$insertar->bindValue('pass',$passwordIncriptada);//COMPLETAR
			$insertar->execute();

		}

		public function ObtenerUsuario($nombre,$clave){
			$DB=basededatos::conectar();
			$selection=$DB->prepare('SELECT * FROM usuarios WHERE nombreusu=:nombreUsu');
			$selection->bindValue('nombreUsu',$nombre);
			$selection->execute();
			$resultado=$selection->fetch();
			$Myusuario=new Usuario();
			//verfica si la clave es correcta
			if($clave==$resultado['password']){
				$Myusuario->setnombreUsu($resultado['nombreusu']);
				$Myusuario->setpasswordUsu($resultado['password']);
				$Myusuario->setestadoUsu($resultado['estado']);
				$Myusuario->setfechaVencimientoUsu($resultado['fechavencimiento']);
				$Myusuario->settipoUsu($resultado['tipo']);
			}
			return $Myusuario;
		}

		public function Validar_fechaVencida($fechaVencimiento){	
			$DB=basededatos::conectar();
			$selection=$DB->prepare('SELECT ValidarFecha(:fechaDeVencimiento) fechavalidada');
			$selection->bindValue('fechaDeVencimiento',$fechaVencimiento);
			$selection->execute();
			$resultado=$selection->fetch();

			return $resultado['fechavalidada'];
		}
	
	}
?>
