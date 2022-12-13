<?php
include('conexionv.php');

if(isset($_POST['insertamascota']))
{
    $Foto1 = $_FILES['Foto1']['name'];
    $Foto2 = $_FILES['Foto2']['name'];
    $Foto3 = $_FILES['Foto3']['name'];
    $Foto4 = $_FILES['Foto4']['name'];
    $Foto5 = $_FILES['Foto5']['name'];
    $Foto6 = $_FILES['Foto6']['name'];


    $Nombre = $_POST['Nombre'];
    $Color = $_POST['Color'];
    $Raza = $_POST['Raza'];
    $Sexo = $_POST['Sexo'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $IdPropietario = $_POST['IdPropietario'];



    if(isset($Foto1) && $Foto1 != "")
    {
        $tipo = $_FILES['Foto1']['type'];
        $temp  = $_FILES['Foto1']['tmp_name'];
        $temp2  = $_FILES['Foto2']['tmp_name'];
        $temp3  = $_FILES['Foto3']['tmp_name'];
        $temp4  = $_FILES['Foto4']['tmp_name'];
        $temp5  = $_FILES['Foto5']['tmp_name'];
        $temp6  = $_FILES['Foto6']['tmp_name'];

        if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp'))))
        {
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:../index.php');
      }
      else
      {
        $query = "INSERT INTO mascota(Nombre,Color,Raza,Sexo,FechaNacimiento,IdPropietario,Foto1,Foto2,Foto3,Foto4,Foto5,Foto6) values('$Nombre','$Color','$Raza','$Sexo','$FechaNacimiento','$IdPropietario','$Foto1','$Foto2','$Foto3','$Foto4','$Foto5','$Foto6')";
        $resultado = mysqli_query($conn,$query);
        if($resultado)
        {
          move_uploaded_file($temp,'images/'.$Foto1);
          move_uploaded_file($temp2,'images/'.$Foto2);
          move_uploaded_file($temp3,'images/'.$Foto3);
          move_uploaded_file($temp4,'images/'.$Foto4);
          move_uploaded_file($temp5,'images/'.$Foto5);
          move_uploaded_file($temp6,'images/'.$Foto6);


          echo" 
          <script language='javascript'> 
          alert('REGISTRO EXITOSO') 
          window.location='RegistroMascota.php' 
          </script>"; 
      }
      else
      {
       echo" 
       <script language='javascript'> 
       alert('ERROR AL GUARDAR LOS DATOS') 
       window.location='RegistroMascota.php' 
       </script>"; 
       exit(); 
   }
}
}
}


?>