<?php

    require_once("../../controller/serieCtrl.php");    
    
    $obj = new serieController(); 
    $obj->update($_POST['idSerie'],$_POST['nombreSerie']);
?>

