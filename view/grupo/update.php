<?php

require_once("../../controller/grupoCtrl.php");

$obj = new grupoController();
$idGrupo = $_POST['idGrupo'];
$codigo = $_POST['codigo'];
$nombreGrupo = $_POST['nombreGrupo'];

$obj->update($idGrupo, $codigo, $nombreGrupo);

