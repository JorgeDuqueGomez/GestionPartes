<?php

require_once ("../../controller/lateralidadCtrl.php");

$obj = new lateralidadController();
$obj->save($_POST['nombreLateralidad'],$_POST['nombreCorto']);

?>          
