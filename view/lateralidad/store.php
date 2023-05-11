<?php

require_once ("../../controller/lateralidadCtrl.php");

$obj = new lateralidadController();
$obj->guardar($_POST['nombre']);

?>          
