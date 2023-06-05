<?php
require_once("../../controller/estacionCtrl.php");
$obj = new estacionController();
$obj->delete($_POST['id']);
?>

