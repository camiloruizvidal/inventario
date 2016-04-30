<?php

$serx = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo');
$data = array(array('name' => '2015', 'data' => array(5370210, 2279541, 7952308, 1432630, 8342698)),
    array('name' => '2016', 'data' => array(9749409, 7414681, 2387187, 1603016, 9998764)));
echo json_encode(array('serx' => $serx, 'data' => $data,'year'=>'año 2015 - 2016'));
