<?php

    require_once("../../controller/parteCtrl.php");    
    
    $obj = new parteController(); 
    $obj->update(
        $_POST['idParte'],
        $_POST['nombreParte'],
        $_POST['numeroParte'],
        $_POST['idMaterial']);
?>
<h1>MODIFICAR UNA LATERALIDAD</h1>
