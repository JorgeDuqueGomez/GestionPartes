<?php
require_once("../../controller/grupoCtrl.php");
$obj = new grupoController();
$obj->delete($_POST["id"]);
?>

