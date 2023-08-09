<?php

require_once("../../controller/listadoCtrl.php");

$obj = new listadoController();

$idListado = $_POST['idListado'];
$idSufix = $_POST['idSufix'];
$nombreSufix = $_POST['nombreSufix'];
$loteAnterior = $_POST['loteAnterior'];
$loteEfectividad = $_POST['loteEfectividad'];
$nombreEstacionAnterior = $_POST['nombreEstacionAnterior'];
$nombreLateralidadAnterior = $_POST['nombreLateralidadAnterior'];
$nombreEstacionNueva = $_POST['nombreEstacionNueva'];
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
