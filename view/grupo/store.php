<?php

require_once ("../../controller/grupoCtrl.php");

$obj = new grupoController();
$obj->save($_POST['codigo'],$_POST['nombreGrupo']);

?>          
