<?php
require "conexion.php";
session_start();



$EstadoRegistro = '';

if (isset($_GET['IdMacota'])) {
  $IdMacota = $_GET['IdMacota'];
  $query = "SELECT * FROM mascota WHERE IdMacota=$IdMacota";
  $result = mysqli_query($mysqli, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $EstadoRegistro = $row['EstadoRegistro'];
  }
}

if (isset($_POST['update'])) {
  $IdMacota = $_GET['IdMacota'];
  $EstadoRegistro = $_POST['EstadoRegistro'];


  $query = "UPDATE mascota set EstadoRegistro='$EstadoRegistro' WHERE IdMacota=$IdMacota";
  mysqli_query($mysqli, $query);
  $_SESSION['message'] = 'Usuario Modificado exitosamente!';
  $_SESSION['message_type'] = 'warning';
  header('Location: ImagenProcesar.php');
}

?>
<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="EditarUsuario.php?Identificacion=<?php echo $_GET['IdMacota']; ?>" method="POST">
          <div class="form-group">
            <label><b>Identificación</b></label>
            <input name="IdMacota" type="text" class="form-control" value="<?php echo $IdMacota; ?>" readonly placeholder="Actualizar IdMacotaIdMacota" autofocus>
          </div>



          <div class="form-group">
            <input name="EstadoRegistro" type="text" class="form-control" value="<?php echo $EstadoRegistro; ?>" readonly placeholder="Actualizar estado mascota">
          </div>

          
          <input type="submit" name="update" class="btn-success" value="Actualizar">
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>