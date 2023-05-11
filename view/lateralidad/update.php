<?php

    require_once("../../controller/lateralidadCtrl.php");    
    
    $obj = new lateralidadController();
    $obj->update($_POST['idLateralidad'],$_POST['nombre']);
?>
<h1>MODIFICAR UNA LATERALIDAD</h1>
