<?php

    require_once("../../controller/estacionCtrl.php");    
    
    $obj = new estacionController(); 
    $obj->update($_POST['idEstacion'],$_POST['idLinea'],$_POST['nombreEstacion'],$_POST['idEstado']);
?>

