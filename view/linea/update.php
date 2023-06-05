<?php

    require_once("../../controller/lineaCtrl.php");    
    
    $obj = new lineaController(); 
    $obj->update($_POST['idLinea'],$_POST['nombreLinea'],$_POST['idEstado']);
?>

