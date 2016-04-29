<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sistema de facturacion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pages/dashboard.css" rel="stylesheet">

        <script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script> 
        <script language="javascript" type="text/javascript" src="js/chart.min.js" type="text/javascript"></script> 
        
        <script language="javascript" type="text/javascript" src="js/full-calendar/jquery.min.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript" src="js/full-calendar/jquery-ui.custom.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
        
        <script language="javascript" type="text/javascript" src="js/full-calendar/moment.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
        <!--<script language="javascript" type="text/javascript" src="js/base.js"></script>--> 

        <script language="javascript" type="text/javascript" src="js/agenda.js"></script> 

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
    </head>
    <body>
        <?php
        include_once './template/menuuser.php';
        ?>
        <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget widget-nopad">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Estado del día</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <div class="widget big-stats-container">
                                        <div class="widget-content">
                                            <h6 class="bigstats">Aquí esta un resumen muy basico de los diferentes reportes del día de hoy. En orden estan, cantidad de ventas del día, precio total de ventas del dia, cantidad de productos en el inventario, precio total del inventario.</h6>
                                            <div id="big_stats" class="cf">
                                                <div class="stat"> <i class="icon-flag"></i> <span class="value">23</span> </div>
                                                <!-- .stat -->

                                                <div class="stat"> <i class="icon-money"></i> <span class="value">423 K</span> </div>
                                                <!-- .stat -->

                                                <div class="stat"> <i class=" icon-tasks"></i> <span class="value">922</span> </div>
                                                <!-- .stat -->

                                                <div class="stat"> <i class="glyphicon glyphicon-usd"></i> <span class="value">234 M</span> </div>
                                                <!-- .stat --> 
                                            </div>
                                        </div>
                                        <!-- /widget-content --> 

                                    </div>
                                </div>
                            </div>
                            <!-- /widget -->
                            <div class="widget widget-nopad">
                                <div class="widget-header"> <i class="icon-list-alt"></i>
                                    <h3> Calendario</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <div id="calendar">
                                    </div>
                                </div>
                                <!-- /widget-content --> 
                            </div>
                        </div>
                        <!-- /span6 -->
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-header"> <i class="icon-bookmark"></i>
                                    <h3>Accesos directos importantes</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <div class="shortcuts"> <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span
                                                class="shortcut-label">Reportes</span> </a><a href="javascript:;" class="shortcut"><i
                                                class="shortcut-icon  icon-truck"></i><span class="shortcut-label">Productos</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Estadísticas</span> </a>
                                        <a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Comentarios</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                                class="shortcut-label">Usuarios</span> </a><a href="javascript:;" class="shortcut"><i
                                                class="shortcut-icon icon-file"></i><span class="shortcut-label">Notas</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-picture"></i> 
                                            <span class="shortcut-label">Fotos</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i>
                                            <span class="shortcut-label">Etiquetas</span> </a> </div>
                                    <!-- /shortcuts --> 
                                </div>
                                <!-- /widget-content --> 
                            </div>
                            <!-- /widget -->
                            <div class="widget">
                                <div class="widget-header"> <i class="icon-signal"></i>
                                    <h3> Ventas en el año (2015 - 2016)</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
                                    <!-- /area-chart --> 
                                </div>
                                <!-- /widget-content --> 
                            </div>
                            <!-- /widget -->
                            <div class="widget widget-table action-table">
                                <div class="widget-header"> <i class="icon-th-list"></i>
                                    <h3>Últimas sesiones abiertas</h3>
                                </div>
                                <!-- /widget-header -->
                                <div class="widget-content">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> Usuario </th>
                                                <th> Fecha y lugar</th>
                                                <th class="td-actions"> Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span style="color: #008866">Conectado</span> Alejandro Belalcazar </td>
                                                <td> 28/04/2016 02:23:34 PM<br>IP: 135.234.123.45 </td>
                                                <td class="td-actions">
                                                    <a href="javascript:;" class="btn btn-small btn-success">
                                                        <i class="btn-icon-only icon-remove-sign"> </i> cerrar
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-danger btn-small">
                                                        <i class="btn-icon-only icon-remove"> </i> Bloquear
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #008866">Conectado</span> Alejandro Belalcazar </td>
                                                <td> 28/04/2016 02:23:34 PM<br>IP: 135.234.123.45 </td>
                                                <td class="td-actions">
                                                    <a href="javascript:;" class="btn btn-small btn-success">
                                                        <i class="btn-icon-only icon-remove-sign"> </i> cerrar
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-danger btn-small">
                                                        <i class="btn-icon-only icon-remove"> </i> Bloquear
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span style="color: #008866">Conectado</span> Alejandro Belalcazar </td>
                                                <td> 28/04/2016 02:23:34 PM<br>IP: 135.234.123.45 </td>
                                                <td class="td-actions">
                                                    <a href="javascript:;" class="btn btn-small btn-success">
                                                        <i class="btn-icon-only icon-remove-sign"> </i> cerrar
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-danger btn-small">
                                                        <i class="btn-icon-only icon-remove"> </i> Bloquear
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /span6 --> 
                    </div>
                    <!-- /row --> 
                </div>
                <!-- /container --> 
            </div>
            <!-- /main-inner --> 
        </div>
        <!-- /main -->
        <?php
        include_once './template/footer.php';
        ?>
        <script>
            var lineChartData = {
                labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
                datasets: [
                    {
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        data: [65, 59, 60, 41, 36]
                    },
                    {
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        data: [28, 48, 40, 19, 46]
                    }
                ]

            }

            var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);
            var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 96, 27, 100]
                    }
                ]

            };
        </script><!-- /Calendar -->

    </body>
</html>
