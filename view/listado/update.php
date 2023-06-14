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

    
    // Verificar si los arrays tienen la misma cantidad de elementos
    if (
        count($idListado) === count($idEstacion) &&
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
                $cantidad[$i]

            );
        }
    }