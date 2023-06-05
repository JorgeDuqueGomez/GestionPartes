<?php

    require_once("../../controller/familiaCtrl.php");    
    
    $obj = new familiaController(); 
    $obj->update($_POST['idFamilia'],$_POST['nombreFamilia']);
?>

