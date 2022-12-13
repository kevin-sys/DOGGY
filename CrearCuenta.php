<?php

require "conexion.php";

session_start();
if (isset($_SESSION['Identificacion'])) {
  echo" 
  <script language='javascript'> 
  alert(':... Bienvenido de nuevo ...:') 
  window.location='Principal.php' 
  </script>"; 
  exit(); 
  //header("Location: Principal.php");
}


if ($_POST) {

  $Usuario = $_POST['Usuario'];
  $Contraseña = $_POST['Contraseña'];

  $sql = "SELECT Identificacion, Usuario, Contraseña FROM usuario WHERE Usuario='$Usuario'";
  //echo $sql;
  $resultado = $mysqli->query($sql);
  $num = $resultado->num_rows;

  if ($num > 0) {
    $row = $resultado->fetch_assoc();
    $password_bd = $row['Contraseña'];
    $usuario_bd = $row['Usuario'];
    
    $pass_c = ($Contraseña);
    $usuario_c = ($Usuario);


    if ($usuario_bd != $usuario_c) {
     echo" 
     <script language='javascript'> 
     alert(':... El usuario ingresado no coincide con ninguna cuenta ...:') 
     window.location='index.php' 
     </script>"; 
     exit(); 
   }

   if ($password_bd == $pass_c and $usuario_bd == $usuario_c) {

    $_SESSION['Identificacion'] = $row['Identificacion'];
    $_SESSION['Usuario'] = $row['Usuario'];


    header("Location: Principal.php");
  } else {

    echo" 
    <script language='javascript'>      
    alert(':... Contraseña incorrecta ...:') 
    window.location='index.php' 
    </script>"; 
    exit(); 
  }
} else {
 echo" 
 <script language='javascript'>      
 alert(':... El usuario ingresado no coincide con ninguna cuenta ...:') 
 window.location='index.php' 
 </script>"; 
 exit(); 
}
}



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login - DOGGY</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">

    <br>
    <div class="login-box">
     <form action="insertacuenta.php" method="POST" enctype="multipart/form-data" class="login-form">
      <h4 class="login-head">Crear cuenta en Doggy</h4>
      <div class="form-group">
        <label class="control-label">IDENTIFICACIÓN</label>
        <input class="form-control" type="text" name="Identificacion" autofocus placeholder="Identificacion" required>
      </div>
      <div class="form-group">
        <label class="control-label">USUARIO</label>
        <input class="form-control" type="text" placeholder="Usuario" name="Usuario"  required>
      </div>
      <div class="form-group">
        <label class="control-label">CONTRASEÑA</label>
        <input class="form-control" type="password" name="Contraseña" placeholder="Contraseña" required>
      </div>



      <div class="form-group">
        <div class="utility">

          <p class="semibold-text mb-2 ml-4"><a href="index.php" data-toggle="flip">¿Tienes una cuenta? inicia sesión</a></p>
        </div>
      </div>
      <div class="form-group btn-container">
        <button  type="submit" name="insertacuenta" id="alerta" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Crear cuenta</button>

        
      </div>
    </form>

  </div>
</section>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<script type="text/javascript">
      // Login Page Flipbox control
  $('.login-content [data-toggle="flip"]').click(function() {
   $('.login-box').toggleClass('flipped');
   return false;
 });
</script>
</body>
</html>