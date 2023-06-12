<?php
require_once("../../controller/listadoCtrl.php");
$obj = new listadoController();
$obj->delete($_POST["id"]);
?>

