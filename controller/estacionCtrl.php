<?php

class estacionController
{
   private $model;
   public function __construct()
   {
      require_once("c:/wamp64/www/HINO/model/estacionMdl.php");
      $this->model = new estacionModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function save($idLinea, $nombreEstacion)
   {
      $idEstacion = $this->model->insertar($idLinea, $nombreEstacion);
      return ($idEstacion != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function update($idEstacion, $idLinea, $nombreEstacion, $idEstado)
   {
      return ($this->model->update($idEstacion, $idLinea, $nombreEstacion, $idEstado) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idEstacion)
   {
      return ($this->model->delete($idEstacion)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function show($idEstacion)
   {
      return ($this->model->show($idEstacion) != false) ? $this->model->show($idEstacion) :
         header("Location:index.php");
   }
   public function showEstado()
   {
      return ($this->model->showEstado()) ? $this->model->showEstado() : false;
   }
   public function getEstado()
   {
      return ($this->model->getEstado()) ? $this->model->getEstado() : false;
   }
   public function getLinea()
   {
      return ($this->model->getLinea()) ? $this->model->getLinea() : false;
   }
   public function getLateralidad()
   {
      return ($this->model->getLateralidad()) ? $this->model->getLateralidad() : false;
   }
}
