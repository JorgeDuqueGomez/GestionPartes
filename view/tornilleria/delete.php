<?php
require_once("../../controller/serieCtrl.php");
$obj = new serieController();
$obj->delete($_POST['id']);
?>

