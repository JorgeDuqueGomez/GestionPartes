<?php
require_once("../../controller/modeloCtrl.php");
$obj = new modeloController();
$obj->delete($_POST['id']);
?>

