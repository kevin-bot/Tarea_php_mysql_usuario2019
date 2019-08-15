<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
			header("location:index.php");
	}	
	require_once("conexion.php");
	require_once("crud_usuario.php");
	require_once("Usuario.php");
	

	
			$myusuario=new Usuario();
			$MycrudUsuario=new crud_usuario();

			//INSTANCIA DEL USUARIO DE LA BD 
			$MyusuarioOptenido=$MycrudUsuario->ObtenerUsuario($_POST['txtUsuario'],$_POST['txtPassword']);	

  if($MyusuarioOptenido->getnombreUsu()!=null  && $MyusuarioOptenido->getestadoUsu() !="0" && $MycrudUsuario->Validar_fechaVencida($MyusuarioOptenido->getfechaVencimientoUsu())){
					
				


			 		if($MyusuarioOptenido->gettipoUsu()=="U"){
			 				$_SESSION["usuario"]=$MyusuarioOptenido;			
			 			header("location:Cuenta_indexusuario.php");
			 		}else if($MyusuarioOptenido->gettipoUsu()=="A"){
			 			$_SESSION["usuario"]=$MyusuarioOptenido;			
			 			header("location:Cuenta_indexAdministrador.php");	
			 		}


			}else {
				header("location:index.php");		
				//echo "No es correcto";
			}	


  ?>



