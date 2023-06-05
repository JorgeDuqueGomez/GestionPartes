<?php

require_once ("../../controller/familiaCtrl.php");

$obj = new familiaController();
$obj->save($_POST['nombreFamilia']);

?>          
