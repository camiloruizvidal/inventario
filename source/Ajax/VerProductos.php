<?php

if ($_POST)
{
    extract($_POST);
    include '../model/modelproductos.php';
    include '../visual/Visual.php';
    $Pro    = new modelproductos();
    $Render = new Visual();
    $Datos = $Pro->VerProductos($pag);
    echo $Render->Tabla($Datos);
}
