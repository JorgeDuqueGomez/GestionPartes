<?php
require_once("../../controller/lateralidadCtrl.php");
$obj = new lateralidadController();
$obj->delete($_POST['id']);
?>

