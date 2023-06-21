<?php

require_once ("../../controller/serieCtrl.php");

$obj = new serieController();
$obj->save($_POST['nombreSerie']);

?>          
