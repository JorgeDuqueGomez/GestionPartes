<?php

class lineaController
{
   private $model;
   public function __construct()
   {
      require_once(__DIR__ ."/../model/lineaMdl.php");
      $this->model = new lineaModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function save($nombreLinea)
   {
      $idLinea = $this->model->insertar($nombreLinea);
      return ($idLinea != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function update($idLinea, $nombreLinea, $idEstado)
   {
      return ($this->model->update($idLinea, $nombreLinea, $idEstado) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idLinea)
   {
      return ($this->model->delete($idLinea)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function show($idLinea)
   {
      return ($this->model->show($idLinea) != false) ? $this->model->show($idLinea) :
         header("Location:index.php");
   }
   public function getEstado()
   {
      return ($this->model->getEstado()) ? $this->model->getEstado() : false;
   }

}
