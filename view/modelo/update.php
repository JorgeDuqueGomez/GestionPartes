<?php

    require_once("../../controller/modeloCtrl.php");    
    
    $obj = new modeloController(); 
    $obj->update($_POST['idModelo'],$_POST['nombreModelo']);
?>

