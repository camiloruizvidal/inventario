<?php

include_once '../model/modelproductos.php';
include_once '../visual/Visual.php';
$Render = new Visual();
$Pro    = new modelproductos();
$Datos  = $Pro->VerPresentacionesProductos();
echo $Render->Select($Datos,'','null');
