<?php
require_once("../../controller/parteCtrl.php");
$obj = new parteController();
$obj->delete($_POST['id']);
?>

