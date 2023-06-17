<?php

require_once ("../../controller/grupoCtrl.php");

$obj = new grupoController();

$codigo = $_POST['codigo'];
$nombreGrupo = $_POST['nombreGrupo'];

$obj->save($codigo, $nombreGrupo);
?>          
