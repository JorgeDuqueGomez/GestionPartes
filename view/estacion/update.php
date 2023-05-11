<?php

    require_once("../../controller/estacionCtrl.php");    
    
    $obj = new estacionController();
    $obj->update($_POST['id'],$_POST['linea'],$_POST['nombre'],$_POST['lateralidad'],$_POST['estado']);
?>
<h1>MODIFICAR UNA LATERALIDAD</h1>
