<?php

require_once ("../../controller/estanteriaCtrl.php");

$obj = new estanteriaController();
$obj->save(
    $_POST['modulo'],
    $_POST['posicion'],
);

?>          
