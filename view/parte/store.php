<?php

require_once ("../../controller/parteCtrl.php");

$obj = new parteController();
$obj->save($_POST['nombreParte'],$_POST['numeroParte']);

?>          
