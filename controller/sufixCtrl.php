<?php

class sufixController
{
   private $model;
   public function __construct()
   {
      require_once(__DIR__ ."/../model/sufixMdl.php");
      $this->model = new sufixModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function save($idSerie, $idFamilia, $idModelo, $proyecto ,$nombreSufix, $codigoModelo, $idDestino)
   {
      $idSufix = $this->model->insertar($idSerie, $idFamilia, $idModelo, $proyecto ,$nombreSufix, $codigoModelo, $idDestino);
      return ($idSufix != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function show($idSufix)
   {
      return ($this->model->show($idSufix) != false) ? $this->model->show($idSufix) :
         header("Location:index.php");
   }
   public function update($idSufix, $idSerie, $idFamilia, $idModelo, $proyecto ,$nombreSufix, $codigoModelo, $idDestino, $idEstado)
   {
      return ($this->model->update($idSufix, $idSerie, $idFamilia, $idModelo, $proyecto ,$nombreSufix, $codigoModelo, $idDestino, $idEstado) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idSufix)
   {
      return ($this->model->delete($idSufix)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function getSerie()
   {
      return ($this->model->getSerie()) ? $this->model->getSerie() : false;
   }
   public function getFamilia()
   {
      return ($this->model->getFamilia()) ? $this->model->getFamilia() : false;
   }
   public function getModelo()
   {
      return ($this->model->getModelo()) ? $this->model->getModelo() : false;
   }
   public function getDestino()
   {
      return ($this->model->getDestino()) ? $this->model->getDestino() : false;
   }
   public function getEstado()
   {
      return ($this->model->getEstado()) ? $this->model->getEstado() : false;
   }
}
