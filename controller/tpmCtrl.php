<?php

class tpmController
{
   private $model;
   public function __construct()
   {
      require_once(__DIR__ ."/../model/tpmMdl.php");
      $this->model = new tpmModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function trash()
   {
      return ($this->model->trash()) ? $this->model->trash() : false;
   }
   public function save(
        $idListado,
        $idSufix ,
        $nombreSufix,
        $loteAnterior,
        $loteEfectividad,
        $nombreEstacionAnterior,
        $nombreEstacionNueva,
        $nombreLateralidadAnterior,
        $nombreLateralidadNueva,
        $idParteAnterior,
        $idParteNueva,
        $grupoAnterior,
        $grupoNuevo,
        $componentAnterior,
        $componentNuevo,
        $cantidadAnterior,
        $cantidadNueva,
        $numeroCajaAnterior,
        $numeroCajaNueva,
        $nombreCajaAnterior,
        $nombreCajaNueva)
   {
      $idTpm = $this->model->insertar(        
        $idListado,
        $idSufix ,
        $nombreSufix,
        $loteAnterior,
        $loteEfectividad,
        $nombreEstacionAnterior,
        $nombreEstacionNueva,
        $nombreLateralidadAnterior,
        $nombreLateralidadNueva,
        $idParteAnterior,
        $idParteNueva,
        $grupoAnterior,
        $grupoNuevo,
        $componentAnterior,
        $componentNuevo,
        $cantidadAnterior,
        $cantidadNueva,
        $numeroCajaAnterior,
        $numeroCajaNueva,
        $nombreCajaAnterior,
        $nombreCajaNueva);
      return ($idTpm != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function update(
   $idListado,
   $idEstacion,
   $idLateralidad,
   $numeroCaja,
   $idCaja,
   $idGrupo,
   $componentCode,
   $cantidad,
   $nombreModeloCopy,
   $nombreSufixCopy,
   $loteCopy,
   $nombreEstacionCopy,
   $nombreLateralidadCopy,
   $nombreMaterialCopy,
   $nombreParteCopy,
   $numeroParteCopy,
   $codigoCopy,
   $componentCodeCopy,
   $cantidadCopy,
   $numeroCajaCopy,
   $nombreCajaCopy)
   {
      return ($this->model->update(
      $idListado,
      $idEstacion,
      $idLateralidad,
      $numeroCaja,
      $idCaja,
      $idGrupo,
      $componentCode,
      $cantidad,
      $nombreModeloCopy,
      $nombreSufixCopy,
      $loteCopy,
      $nombreEstacionCopy,
      $nombreLateralidadCopy,
      $nombreMaterialCopy,
      $nombreParteCopy,
      $numeroParteCopy,
      $codigoCopy,
      $componentCodeCopy,
      $cantidadCopy,
      $numeroCajaCopy,
      $nombreCajaCopy) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function getSelectedRows($selectedIds)
   {
      return ($this->model->getSelectedRows($selectedIds) != false) ? $this->model->getSelectedRows($selectedIds) :
         header("Location:index.php");
   }
   public function show($idListado)
   {
      return ($this->model->show($idListado) != false) ? $this->model->show($idListado) :
         header("Location:index.php");
   }
   public function delete($idListado)
   {
      return ($this->model->delete($idListado)) ?
         header("Location:index.php") :
         header("Location:show.php?id=" . $idListado);
   }
   public function restore($idListado)
   {
      return ($this->model->restore($idListado)) ?
         header("Location:trash.php") :
         header("Location:show.php?id=" . $idListado);
   }
   public function showParte()
   {
      return ($this->model->showParte()) ? $this->model->showParte() : false;
   }
   public function getLateralidad()
   {
      return ($this->model->getLateralidad()) ? $this->model->getLateralidad() : false;
   }
   public function validationEstacion()
   {
      return ($this->model->validationEstacion()) ? $this->model->validationEstacion() : false;
   }
   public function getLinea()
   {
      return ($this->model->getLinea()) ? $this->model->getLinea() : false;
   }
   public function getEstacion()
   {
      return ($this->model->getEstacion()) ? $this->model->getEstacion() : false;
   }
   public function getGrupo()
   {
      return ($this->model->getGrupo()) ? $this->model->getGrupo() : false;
   }
   public function getMaterial()
   {
      return ($this->model->getMaterial()) ? $this->model->getMaterial() : false;
   }
   public function getParte()
   {
      return ($this->model->getParte()) ? $this->model->getParte() : false;
   }
   public function getCaja()
   {
      return ($this->model->getCaja()) ? $this->model->getCaja() : false;
   }
   public function listadoLog()
   {
      return ($this->model->listadoLog()) ? $this->model->listadoLog() : false;
   }
}
