<?php

require_once ("../../controller/modeloCtrl.php");

$obj = new modeloController();
$obj->save($_POST['nombreModelo'],$_POST['idSerie']);

?>          
