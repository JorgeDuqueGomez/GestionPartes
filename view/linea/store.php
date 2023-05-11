<?php

require_once ("../../controller/lineaCtrl.php");

$obj = new lineaController();
$obj->save($_POST['nombreLinea'],$_POST['idEstado']);

?>          
