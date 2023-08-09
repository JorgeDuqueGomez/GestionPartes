<?php
require_once ("../../controller/tpmCtrl.php");
$obj = new tpmController();

$idListado = $_POST['idListado'];
$idSufix = $_POST['idSufix'];
$nombreSufix = $_POST['nombreSufix'];
$loteAnterior = $_POST['loteAnterior'];
$loteEfectividad = $_POST['loteEfectividad'];
$nombreEstacionAnterior = $_POST['nombreEstacionAnterior'];
$nombreEstacionNueva = $_POST['nombreEstacionNueva'];
$nombreLateralidadAnterior = $_POST['nombreLateralidadAnterior'];
$nombreLateralidadNueva = $_POST['nombreLateralidadNueva'];
$idParteAnterior = $_POST['idParteAnterior'];
$idParteNueva = $_POST['idParteNueva'];
$grupoAnterior = $_POST['grupoAnterior'];
$grupoNuevo = $_POST['grupoNuevo'];
$componentAnterior = $_POST['componentAnterior'];
$componentNuevo = $_POST['componentNuevo'];
$cantidadAnterior = $_POST['cantidadAnterior'];
$cantidadNueva = $_POST['cantidadNueva'];
$numeroCajaAnterior = $_POST['numeroCajaAnterior'];
$numeroCajaNueva = $_POST['numeroCajaNueva'];
$nombreCajaAnterior = $_POST['nombreCajaAnterior'];
$nombreCajaNueva = $_POST['nombreCajaNueva'];

for ($i = 0; $i < count($idListado); $i++) {
    $obj->save(
        $idListado[$i],
        $idSufix[$i],
        $nombreSufix[$i],
        $loteAnterior[$i],
        $loteEfectividad[$i],
        $nombreEstacionAnterior[$i],
        $nombreEstacionNueva[$i],
        $nombreLateralidadAnterior[$i],
        $nombreLateralidadNueva[$i],
        $idParteAnterior[$i],
        $idParteNueva[$i],
        $grupoAnterior[$i],
        $grupoNuevo[$i],
        $componentAnterior[$i],
        $componentNuevo[$i],
        $cantidadAnterior[$i],
        $cantidadNueva[$i],
        $numeroCajaAnterior[$i],
        $numeroCajaNueva[$i],
        $nombreCajaAnterior[$i],
        $nombreCajaNueva[$i]
    );
}
?>          
