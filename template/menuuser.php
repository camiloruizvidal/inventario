<?php
@session_start();
if (!$_SESSION)
{
    header('location: login.php');
}
$locationmenu = $_SERVER['REQUEST_URI'];
$locationmenu = (end(explode('/', $locationmenu)));
$active       = array('', '', '', '', '', '');
switch ($locationmenu)
{
    case 'productos_new.php':$active[6] = ' class="active"';
        break;
    default :$active[0] = ' class="active"';
}
?>
<nav class="navbar navbar-default navbar-fixed-top navbar-inner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span style="color:white;">Administrador de inventario</span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-cog"></i> Cuenta <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:;">Configuración</a></li>
                        <li><a href="javascript:;">Ayuda</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i> <?php echo $_SESSION['username'] ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:;">Perfil</a></li>
                        <li><a href="javascript:;">Cerrar sessión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.nav-collapse -->
</nav>
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li<?php echo $active[0]; ?>><a href="index.php"><i class="icon-dashboard"></i><span>Panel</span> </a> </li>
                <li<?php echo $active[1]; ?>><a href="reports.php"><i class="icon-list-alt"></i><span>Reportes</span> </a> </li>
                <li<?php echo $active[2]; ?>><a href="guidely.php"><i class="icon-facetime-video"></i><span>Tour por la app</span> </a></li>
                <li<?php echo $active[3]; ?>><a href="calendar.php"><i class="icon-calendar"></i><span>Calendario</span> </a></li>
                <li<?php echo $active[4]; ?>><a href="charts.php"><i class="icon-bar-chart"></i><span>Gráficas</span> </a> </li>
                <li<?php echo $active[5]; ?>><a href="shortcodes.php"><i class="icon-code"></i><span>Código fuente</span> </a> </li>
                <li<?php echo $active[6]; ?>><a href="productos_new.php"><i class="icon-truck"></i><span>Código fuente</span> </a> </li>
            </ul>
        </div>
    </div>
</div>
