<?php

require_once ("../../controller/estacionCtrl.php");

$obj = new estacionController();
$obj->save($_POST['idLinea'],$_POST['nombreEstacion'],$_POST['idLateralidad']);

?>          
