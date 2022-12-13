 <?php if ($Usuario == "Administrador") { ?>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
            src="images/logoUpc.png" width="60" height="50" alt="User Image">
            <div>
                <p class="app-sidebar__user-name">Administrador</p>
                <p class="app-sidebar__user-designation">DOGGY</p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                class="app-menu__label">Menu Principal</span></a></li>

                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestión General</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="treeview-item" href="RegistroPropietario.php"><i class="icon fa fa-circle-o"></i> Registrar propietario</a></li>
                        <li><a class="treeview-item" href="ConsultaPropietario.php"><i class="icon fa fa-circle-o"></i> Listado de propietarios</a></li>
                        <li><a class="treeview-item" href="ConsultaCanino.php"><i class="icon fa fa-circle-o"></i> Listado de caninos</a></li>

                    </ul>
                </li>
                <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Procesar imagenes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="treeview-item" href="ImagenProcesar.php"><i class="icon fa fa-circle-o"></i> Imagenes por procesar</a></li>
                        <li><a class="treeview-item" href="ImagenProcesada.php"><i class="icon fa fa-circle-o"></i> Imagenes procesadas</a></li>

                    </ul>
                </li>
            </ul>
        </aside>
    <?php } ?>

    <?php if ($Usuario != "Administrador") { ?>
        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                src="images/logoUpc.png" width="60" height="50" alt="User Image">
                <div>
                    <p class="app-sidebar__user-name">Usuario</p>
                    <p class="app-sidebar__user-designation">DOGGY</p>
                </div>
            </div>
            <ul class="app-menu">
                <li><a class="app-menu__item" href="principal.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span
                    class="app-menu__label">Menu Principal</span></a></li>

                    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Gestión General</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="treeview-item" href="MisDatosPersonales.php"><i class="icon fa fa-circle-o"></i> Mis datos personales</a></li>
                            <li><a class="treeview-item" href="RegistroMascota.php"><i class="icon fa fa-circle-o"></i> Registrar mascota</a></li>
                            <li><a class="treeview-item" href="RegistroMascota.php"><i class="icon fa fa-circle-o"></i> Mis mascotas</a></li>

                        </ul>
                    </li>
                </ul>
            </aside>
            <?php } ?>