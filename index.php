<?php
  session_start();
  unset($_SESSION['txtUsuario']);
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Esta lìnea es fundamental para que funcione JQUERY -->
     <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

     <style >
       body{
        background-image: url(fondo.jpg);
        background-size: cover;
        color: #fff;
       }
       .login{margin-top: 100px;}
       .login .card {background: rgba(0,0,0,.6);}
       .login label{font-size: 16px; color:#CCC; }
       .login input{font-size: 22px !important; color: #fff;}
       .login .buttom:hover {padding: 0px 40px}
     </style>

    </head>

    <body >

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <form method="post" action="controller_login.php">
      <div class="hide-on-small-only  ">
      <div class="row login">
          <div class="col s6 14 offset-14" >
              <div class="card">
                  <div class="card-action red white-text #b71c1c red darken-4">
                    <h3>Login</h3>
                  </div>

                  <div class="card-content">

                    <div class="form-field">
                      <label for="usuario">Usuario</label>
                      <input type="text" name="txtUsuario">
                    </div>
                    <div class="form-field">
                      <label for="password">Password</label>
                      <input type="password" name="txtPassword">
                    </div >
                    <div class="form-field center-align">                      
                      <input type="submit" name="btnenviar" class="btn-large red buttom #b71c1c red darken-4">
                    </div>
                  </div>
              </div>
            </div>
      </div>      
      </div>
      </form>
   </body>
 </html>

 <script>

 $(document).ready(function(){
    $('select').formSelect();
  });

 </script>    
