<?php
require_once("../../controller/familiaCtrl.php");
$obj = new familiaController();
$obj->delete($_POST['id']);
?>

