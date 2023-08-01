<?php
require_once("../../controller/listadoCtrl.php");
$obj = new listadoController();
$obj->restore($_POST["id"]);
?>

