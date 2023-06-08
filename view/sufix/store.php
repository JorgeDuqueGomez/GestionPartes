<?php

require_once ("../../controller/sufixCtrl.php");

$obj = new sufixController();
$obj->save(
    $_POST['idSerie'],
    $_POST['nombreFamilia'],
    $_POST['nombreModelo'],
    $_POST['nombreProyecto'],
    $_POST['nombreSufix'],
    $_POST['codigoModelo'],
    $_POST['idDestino']);

?>          
