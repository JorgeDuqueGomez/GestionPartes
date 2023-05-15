<?php
require_once("../../controller/lineaCtrl.php");
$obj = new lineaController();
$obj->delete($_POST['id']);
?>

