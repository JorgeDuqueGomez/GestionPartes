<?php

class modeloController
{
   private $model;
   public function __construct()
   {
      require_once(__DIR__ ."/../model/modeloMdl.php");
      $this->model = new modeloModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function save($nombreModelo)
   {
      $idModelo = $this->model->insertar($nombreModelo);
      return ($idModelo != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function show($idModelo)
   {
      return ($this->model->show($idModelo) != false) ? $this->model->show($idModelo) :
         header("Location:index.php");
   }
   public function update($idModelo, $nombreModelo)
   {
      return ($this->model->update($idModelo, $nombreModelo) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idModelo)
   {
      return ($this->model->delete($idModelo)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }


}
