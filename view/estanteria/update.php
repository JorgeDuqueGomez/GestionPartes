<?php

    require_once("../../controller/estanteriaCtrl.php");    
    
    $obj = new estanteriaController();
    $obj->update($_POST['idEstanteria'],$_POST['idParte'],$_POST['idLinea']);
?>
<h1>MODIFICAR UNA LATERALIDAD</h1>
