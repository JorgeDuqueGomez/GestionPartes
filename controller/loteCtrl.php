<?php

class loteController
{
   private $model;
   public function __construct()
   {
      require_once("c:/wamp64/www/HINO/model/loteMdl.php");
      $this->model = new loteModel();
   }
   public function index()
   {
      return ($this->model->index()) ? $this->model->index() : false;
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


}
