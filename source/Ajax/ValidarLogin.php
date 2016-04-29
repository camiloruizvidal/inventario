<?php
@session_start();
$_SESSION['id']=1;
$_SESSION['username']='Camilo Ruiz';
echo json_encode(array('SiValida'=>TRUE, 'url'=>'dashboard.php'));
