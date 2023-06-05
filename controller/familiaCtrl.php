<?php

class familiaController
{
   private $model;
   public function __construct()
   {
      require_once("c:/wamp64/www/HINO/model/familiaMdl.php");
      $this->model = new familiaModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
   }
   public function save($nombreFamilia)
   {
      $idFamilia = $this->model->insertar($nombreFamilia);
      return ($idFamilia != false) ?
         header("Location:index.php") :
         header("Location:creat.php");
   }
   public function update($idFamilia, $nombreFamilia)
   {
      return ($this->model->update($idFamilia, $nombreFamilia) != false) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function delete($idFamilia)
   {
      return ($this->model->delete($idFamilia)) ?
         header("Location:index.php") :
         header("Location:index.php");
   }
   public function show($idFamilia)
   {
      return ($this->model->show($idFamilia) != false) ? $this->model->show($idFamilia) :
         header("Location:index.php");
   }

}
