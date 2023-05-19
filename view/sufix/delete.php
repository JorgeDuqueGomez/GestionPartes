<?php
require_once("../../controller/sufixCtrl.php");
$obj = new sufixController();
$obj->delete($_POST['id']);
?>

