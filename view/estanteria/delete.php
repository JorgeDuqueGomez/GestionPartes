<?php
require_once("../../controller/estanteriaCtrl.php");
$obj = new estanteriaController();
$obj->delete($_POST["id"]);
?>

