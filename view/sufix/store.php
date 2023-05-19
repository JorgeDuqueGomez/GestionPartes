<?php

require_once ("../../controller/sufixCtrl.php");

$obj = new sufixController();
$obj->save($_POST['familia'],$_POST['modelo'],$_POST['proyecto'],$_POST['sufix'],$_POST['codigo'],$_POST['destino']);

?>          
