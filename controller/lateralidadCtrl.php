<?php

class lateralidadController
{
   private $model;
   public function __construct()
   {
      require_once("c:/wamp64/www/HINO/model/lateralidadMdl.php");
      $this->model = new lateralidadModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function save($nombreLateralidad, $nombreCorto)
   {
      $idLateralidad = $this->model->insertar($nombreLateralidad, $nombreCorto);
      return ($idLateralidad != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function update($idLateralidad, $nombreLateralidad, $nombreCorto)
   {
      return ($this->model->update($idLateralidad, $nombreLateralidad, $nombreCorto) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idLateralidad)
   {
      return ($this->model->delete($idLateralidad)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function show($idLateralidad)
   {
      return ($this->model->show($idLateralidad) != false) ? $this->model->show($idLateralidad) :
         header("Location:index.php");
   }
}
