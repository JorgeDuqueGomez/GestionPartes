<?php

class listadoController
{
    private $model;
    public function __construct()
    {
        require_once("c:/wamp64/www/HINO/model/listadoMdl.php");
        $this->model = new listadoModel();
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
     }
    public function save($modulo, $posicion){
        $idEstanteria = $this->model->insertar($modulo, $posicion);
        return ($idEstanteria != false) ? 
        header("Location:index.php") : 
        header("Location:creat.php");
    } 
     public function update($idEstanteria, $idParte){
        return ($this->model->update($idEstanteria, $idParte) != false) ? 
        header("Location:index.php") : 
        header("Location:index.php");
     }

     public function getId($idListado){
      return ($this->model->getId($idListado) != false) ? $this->model->getId($idListado) : 
      header("Location:index.php");
   }

     public function show($idListado){
        return ($this->model->show($idListado) != false) ? $this->model->show($idListado) : 
        header("Location:index.php");
     }
    public function delete($idListado){
        return ($this->model->delete($idListado)) ? 
        header("Location:index.php") : 
        header("Location:show.php?id=".$idListado);
    }
    public function showParte(){
        return ($this->model->showParte()) ? $this->model->showParte() : false;
     }
     public function getLateralidad()
     {
        return ($this->model->getLateralidad()) ? $this->model->getLateralidad() : false;
     }
     public function getSufix()
     {
        return ($this->model->getSufix()) ? $this->model->getSufix() : false;
     }
}
