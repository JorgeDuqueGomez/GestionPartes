<?php
var_dump($_POST);
require_once("../../controller/tornilleriaCtrl.php");

$obj = new tornilleriaController();

$idAlistamientoPC = $_POST['idAlistamientoPC'];
$idSufix = $_POST['idSufix'];
$nombreSufix = $_POST['nombreSufix'];
$lote = $_POST['lote'];

// Recorrer los arreglos y realizar la inserción por cada elemento
foreach ($idAlistamientoPC as $index => $value) {
    $obj->update(
        $idAlistamientoPC[$index],
        $idSufix[$index],
        $nombreSufix[$index],
        $lote[$index]
    );
}
?>
