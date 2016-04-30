<?php

if ($_POST)
{
    extract($_POST);
    include '../model/modelproductos.php';
    $Pro = new modelproductos();
    $Pro->InsertProductos($descripcion, $id_producto_presentacion, $valor, $cantidad, $minimo_stock, $id_producto_tipo);
}
