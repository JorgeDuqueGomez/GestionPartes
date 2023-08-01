<?php

require_once ("../../controller/parteCtrl.php");

$obj = new parteController();
$obj->saveTpm($_POST['nombreParte'],$_POST['numeroParte'],$_POST['idMaterial']);

?>          
