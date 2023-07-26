<?php

class novedadesController
{
   private $model;
   public function __construct()
   {
      require_once(__DIR__ ."/../model/novedadesMdl.php");
      $this->model = new novedadesModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function trash()
   {
      return ($this->model->trash()) ? $this->model->trash() : false;
   }
   public function save($modulo, $posicion)
   {
      $idEstanteria = $this->model->insertar($modulo, $posicion);
      return ($idEstanteria != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
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
   public function getLinea()
   {
      return ($this->model->getLinea()) ? $this->model->getLinea() : false;
   }
   public function getEstacion()
   {
      return ($this->model->getEstacion()) ? $this->model->getEstacion() : false;
   }

   public function getCaja()
   {
      return ($this->model->getCaja()) ? $this->model->getCaja() : false;
   }
   public function listadoLog()
   {
      return ($this->model->listadoLog()) ? $this->model->listadoLog() : false;
   }










   
   public function getModelo()
   {
      return ($this->model->getModelo()) ? $this->model->getModelo() : false;
   }
   public function getSufix()
   {
      return ($this->model->getSufix()) ? $this->model->getSufix() : false;
   }
   public function getTipoNovedad()
   {
      return ($this->model->getTipoNovedad()) ? $this->model->getTipoNovedad() : false;
   }
   public function getUsuario()
   {
      return ($this->model->getUsuario()) ? $this->model->getUsuario() : false;
   }
   public function getMaterial()
   {
      return ($this->model->getMaterial()) ? $this->model->getMaterial() : false;
   }
   public function getGrupo()
   {
      return ($this->model->getGrupo()) ? $this->model->getGrupo() : false;
   }
}
