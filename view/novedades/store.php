<?php

require_once ("../../controller/novedadesCtrl.php");

$obj = new novedadesController();
$obj->save(
    $_POST['modulo'],
    $_POST['posicion'],
);

?>          
