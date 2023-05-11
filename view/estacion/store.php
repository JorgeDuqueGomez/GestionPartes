<?php

require_once ("../../controller/estacionCtrl.php");

$obj = new estacionController();
$obj->save($_POST['nombreEstacion'],$_POST['idLinea'],$_POST['idLateralidad'],$_POST['idEstado']);

?>          
