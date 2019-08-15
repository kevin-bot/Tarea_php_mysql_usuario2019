<?php

  session_start();
    if(!isset($_SESSION['usuario'])){
      header("location:index.php");
    } 

    //include_once("controller_login.php");
      
?>

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


    <nav class="#00897b teal darken-1">
      <div class="nav-wrapper">
      <a href="#" class="brand-logo">Cliente</a>  
          <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="Clientes.html">Productos</a></li>
              <li><a href="Productos.html">Carritos</a></li>
              <li><a href="Proveedores.html">Credito</a></li>
          </ul>           
      </div>
    </nav>
       
    </body>
  </html>