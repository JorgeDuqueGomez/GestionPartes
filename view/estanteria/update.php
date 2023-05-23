<?php

    require_once("../../controller/grupoCtrl.php");    
    
    $obj = new grupoController();
    $obj->update($_POST['idGrupo'],$_POST['codigo'],$_POST['nombreGrupo']);
?>
<h1>MODIFICAR UNA LATERALIDAD</h1>
