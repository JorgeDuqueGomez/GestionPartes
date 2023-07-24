<?php
//var_dump($_POST);
require_once("../../controller/tornilleriaCtrl.php");

$obj = new tornilleriaController();

$nombreSufix = $_POST['nombreSufix'];
$lote = $_POST['lote'];
$nombreEstacion = $_POST['nombreEstacion'];
$nombreLateralidad = $_POST['nombreLateralidad'];
$ubicacion = $_POST['ubicacion'];
$numeroParte = $_POST['numeroParte'];
$nombreParte = $_POST['nombreParte'];
$cantidad = $_POST['cantidad'];
$numeroCaja = $_POST['numeroCaja'];

// Recorrer los arreglos y realizar la inserción por cada elemento
foreach ($nombreSufix as $index => $value) {
    $obj->save(
        $nombreSufix[$index],
        $lote[$index],
        $nombreEstacion[$index],
        $nombreLateralidad[$index],
        $ubicacion[$index],
        $numeroParte[$index],
        $nombreParte[$index],
        $cantidad[$index],
        $numeroCaja[$index]
    );
}
?>
