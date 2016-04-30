<?php

include_once '../model/modelproductos.php';
include_once '../visual/Visual.php';
$Render = new Visual();
$Pro    = new modelproductos();
$Datos  = $Pro->VerTiposProductos();
echo $Render->Select($Datos,'','null');
