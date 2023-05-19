<?php

    require_once("../../controller/sufixCtrl.php");    
    
    $obj = new sufixController(); 
    $obj->update($_POST['idSufix'],$_POST['idFamilia'],$_POST['idModelo'],$_POST['proyecto'],$_POST['nombreSufix'],$_POST['codigoModelo'],$_POST['idDestino'],$_POST['idEstado']);
?>
<h1>MODIFICAR UNA LATERALIDAD</h1>
