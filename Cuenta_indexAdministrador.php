<?php
	session_start();
		if(!isset($_SESSION['usuario'])){
			header("location:index.php");
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
      <a href="#" class="brand-logo center">estamos aca en </a>        
      </div>
    </nav>
       
    </body>
  </html>

<script>
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>