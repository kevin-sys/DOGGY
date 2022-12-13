<?php


include('conexionv.php');

if (isset($_POST['insertacuenta'])) {
  $Identificacion = $_POST['Identificacion'];
  $Usuario = $_POST['Usuario'];
  $Contraseña = $_POST['Contraseña'];


  $query = "INSERT INTO usuario(Identificacion,Usuario,Contraseña) VALUES ('$Identificacion', '$Usuario', '$Contraseña')";
  $result = mysqli_query($conn, $query);
  

  if(!$result) 
  { 
    echo" 
    <script language='javascript'> 
    alert('ERROR AL CREAR LA CUENTA') 
    window.location='CrearCuenta.php' 
    </script>"; 
    exit(); 
  } 
  else 
  { 
    echo" 
    <script language='javascript'> 
    alert('REGISTRO EXITOSO') 
    window.location='DatosPersonales.php' 
    </script>"; 
  }


}

?>
