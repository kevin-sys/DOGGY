<?php
session_start();
require 'conexion.php';
$Usuario = $_SESSION['Usuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listado de caninos - DOGGY</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head>
<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href=""></a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
        aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                aria-label="Open Profile Menu"><i class="fa fa fa-info"></i></a>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i>Salir</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php

    require "include.php";

    ?>

    <main class="app-content">
     <div class="app-title">
        <div>
            <h4> En esta sección podra encontrar información de los caninos registrados en el sistema.</h4>
        </div>
    </div>
    <br>
    <div >
        <h4><i class="fa fa-edit"></i> Listado de caninos</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">        
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id canino</th>
                                    <th>Nombre</th>
                                    <th>Color</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Id Propietario</th>
                                    <th>Estado del registro</th>
                                    <th>Extraviado</th>
                                    <th>Fecha de registro</th>
                                    <th>Foto completa</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $query = "SELECT * FROM mascota";
                                $result_tasks = mysqli_query($mysqli, $query);

                                while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                    <tr>
                                        <td><?php echo $row['IdMacota']; ?></td>
                                        <td><?php echo $row['Nombre']; ?></td>
                                        <td><?php echo $row['Color']; ?></td>
                                        <td><?php echo $row['Raza']; ?></td>
                                        <td><?php echo $row['Sexo']; ?></td>
                                        <td><?php echo $row['FechaNacimiento']; ?></td>
                                        <td><?php echo $row['IdPropietario']; ?></td>
                                        <td><?php echo $row['EstadoRegistro']; ?></td>
                                        <td><?php echo $row['Extraviado']; ?></td>
                                        <td><?php echo $row['FechaRegistro']; ?></td>


                                        <td><img src="images/<?php echo $row['Foto1']; ?>" class="card-img-top" width="100" height="100"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>




</main>

<script src="assets/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/main.js"></script>
<script type="text/javascript" src="main.js"></script>
<script src="assets/sweetalert.min.js"></script>
<script src="assets/datatables/datatables.min.js"></script>  

</body>

</html>
