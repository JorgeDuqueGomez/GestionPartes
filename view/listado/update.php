<?php

require_once("../../controller/listadoCtrl.php");

$obj = new listadoController();

$idListado = $_POST['idListado'];
$idEstacion = $_POST['idEstacion'];
$idLateralidad = $_POST['idLateralidad'];
$numeroCaja = $_POST['numeroCaja'];
$idCaja = $_POST['idCaja'];
$idGrupo = $_POST['idGrupo'];
$componentCode = $_POST['componentCode'];
$cantidad = $_POST['cantidad'];
$nombreModeloCopy = $_POST['nombreModeloCopy'];
$nombreSufixCopy = $_POST['nombreSufixCopy'];
$loteCopy = $_POST['loteCopy'];
$nombreEstacionCopy = $_POST['nombreEstacionCopy'];
$nombreLateralidadCopy = $_POST['nombreLateralidadCopy'];
$nombreMaterialCopy = $_POST['nombreMaterialCopy'];
$nombreParteCopy = $_POST['nombreParteCopy'];
$numeroParteCopy = $_POST['numeroParteCopy'];
$codigoCopy = $_POST['codigoCopy'];
$componentCodeCopy = $_POST['componentCodeCopy'];
$cantidadCopy = $_POST['cantidadCopy'];
$numeroCajaCopy = $_POST['numeroCajaCopy'];
$nombreCajaCopy = $_POST['nombreCajaCopy'];

// Verificar si los arrays tienen la misma cantidad de elementos
if (count($idListado) === count($idEstacion) &&
    count($idEstacion) === count($idLateralidad) &&
    count($idLateralidad) === count($numeroCaja) &&
    count($numeroCaja) === count($idCaja) &&
    count($idCaja) === count($idGrupo) &&
    count($idGrupo) === count($componentCode) &&
    count($componentCode) === count($cantidad)
) {
    // Iterar sobre los valores y llamar a la función de actualización
    $numElements = count($idListado);

    for ($i = 0; $i < $numElements; $i++) {
        // Verificar si el tipo de material es diferente a 'PC'
        if ($idCaja[$i] === '') {
            // Establecer los valores de idCaja y numeroCaja como nulos
            $idCaja[$i] = null;
            $numeroCaja[$i] = null;
        }
        $obj->update(
            $idListado[$i],
            $idEstacion[$i],
            $idLateralidad[$i],
            $numeroCaja[$i],
            $idCaja[$i],
            $idGrupo[$i],
            $componentCode[$i],
            $cantidad[$i],
            $nombreModeloCopy[$i],
            $nombreSufixCopy[$i],
            $loteCopy[$i],
            $nombreEstacionCopy[$i],
            $nombreLateralidadCopy[$i],
            $nombreMaterialCopy[$i],
            $nombreParteCopy[$i],
            $numeroParteCopy[$i],
            $codigoCopy[$i],
            $componentCodeCopy[$i],
            $cantidadCopy[$i],
            $numeroCajaCopy[$i],
            $nombreCajaCopy[$i]
        );
    }
}
