<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ingresar nuevo producto</title>
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
        <script language="javascript" type="text/javascript" src="source/js/Function.js"></script> 
        <script language="javascript" type="text/javascript" src="source/js/productos.js"></script> 
    </head>
    <body>
        <?php
        include_once './template/menuuser.php';
        ?>
        <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">

                    <div class="col-md-6">
                        <div class="widget widget-nopad">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> Nuevo producto</h3>
                            </div>
                            <div class="widget-content">
                                <div class="widget big-stats-container">
                                    <div class="widget-content">
                                            <form id="formulario">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="Producto" id="descripcion" name="descripcion">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Tipo de producto</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <select id="id_producto_tipo" name="id_producto_tipo" class="form form-control"></select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Presentación</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <select id="id_producto_presentacion" name="id_producto_presentacion" class="form form-control"></select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Valor unitario</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" value="0"  id="valor" name="valor">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Cantidad</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="#"  id="cantidad" name="cantidad" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Mínimo Alerta Stock</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="alertas"  id="minimo_stock" name="minimo_stock" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <br/>
                                                <input type="submit" class="btn btn-primary form form-control" value="Guardar producto"/>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget widget-nopad">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> Listado de productos</h3>
                            </div>
                            <div class="widget-content">
                                <div class="widget big-stats-container">
                                    <div class="widget-content">
                                        <div id="ListProductos">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            include_once './template/footer.php';
            ?>
    </body>
</html>
