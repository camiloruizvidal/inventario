<?php

if ($_POST)
{
    extract($_POST);
    include '../model/modelproductos.php';
    include '../visual/Visual.php';
    $Pro    = new modelproductos();
    $Render = new Visual();
    $Datos  = $Pro->VerProductos($pag);
    $total  = $Pro->CantidadProductos();
    $tabla  = $Render->Tabla($Datos, '1', array('#', 'Producto', 'Cantidad', 'Alerta'), 'table table-hover', '', 1);
    echo $Render->Paginar($tabla, $pag, $total, 'CargarProductos');
}
