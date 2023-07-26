<?php
require_once("../../controller/tornilleriaCtrl.php");
$obj =  new tornilleriaController();
$obj->crear($_POST['nombreSufix'],$_POST['lote'], $_POST['nombreLinea']);
?>
