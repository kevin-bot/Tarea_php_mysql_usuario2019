<?php
	session_start();	
	require_once("conexion.php");
	require_once("crud_usuario.php");
	require_once("Usuario.php");
	

	
			$myusuario=new Usuario();
			$MycrudUsuario=new crud_usuario();

			//INSTANCIA DEL USUARIO DE LA BD 
			$MyusuarioOptenido=$MycrudUsuario->ObtenerUsuario($_POST['txtUsuario'],$_POST['txtPassword']);

			if($MyusuarioOptenido->getnombreUsu()!=null  && $MyusuarioOptenido->getestadoUsu() !="0" && $MycrudUsuario->Validar_fechaVencida($MyusuarioOptenido->getfechaVencimientoUsu())){
					
			$_SESSION["usuario"]=$MyusuarioOptenido;			
			 //header("location:Cuenta_indexAdministrador.php");					
			}else {
				header("location:index.php");		
				//echo "No es correcto";
			}	
?>	

<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


    <nav>
      <div class="nav-wrapper">
      <a href="#" class="brand-logo center"></a>        
      </div>
    </nav>
       
    </body>
  </html>

<script>
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>

