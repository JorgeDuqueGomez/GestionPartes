<?php

class tornilleriaController
{
   private $model;
   public function __construct()
   {
      require_once(__DIR__ ."/../model/tornilleriaMdl.php");
      $this->model = new tornilleriaModel();
   }
   public function index($idSufix, $idLinea)
   {
      return ($this->model->index($idSufix, $idLinea)) ? $this->model->index($idSufix, $idLinea) : false;
   }
   public function save($nombreSerie)
   {
      $idSerie = $this->model->insertar($nombreSerie);
      return ($idSerie != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function show($idSerie)
   {
      return ($this->model->show($idSerie) != false) ? $this->model->show($idSerie) :
         header("Location:index.php");
   }
   public function update($idSerie, $nombreSerie)
   {
      return ($this->model->update($idSerie, $nombreSerie) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idSerie)
   {
      return ($this->model->delete($idSerie)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function getLinea()
   {
      return ($this->model->getLinea()) ? $this->model->getLinea() : false;
   }
   public function getModelo()
   {
      return ($this->model->getModelo()) ? $this->model->getModelo() : false;
   }
   public function getSufix()
   {
      return ($this->model->getSufix()) ? $this->model->getSufix() : false;
   }
   public function getLote()
   {
      return ($this->model->getLote()) ? $this->model->getLote() : false;
   }
   public function getEstacion()
   {
      return ($this->model->getEstacion()) ? $this->model->getEstacion() : false;
   }
}
