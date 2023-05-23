<?php

require_once ("../../controller/estanteriaCtrl.php");

$obj = new estanteriaController();
$obj->save(
    $_POST['idParte'],
    $_POST['modulo'],
    $_POST['posicion'],
    $_POST['orden']
);

?>          
