<?php

    require_once("../../controller/lateralidadCtrl.php");    
    
    $obj = new lateralidadController(); 
    $obj->update($_POST['idLateralidad'],$_POST['nombreLateralidad'],$_POST['nombreCorto']);
?>

