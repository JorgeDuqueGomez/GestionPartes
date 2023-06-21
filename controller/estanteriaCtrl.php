<?php

class estanteriaController
{
    private $model;
    public function __construct()
    {
        require_once(__DIR__ ."/../model/estanteriaMdl.php");
        $this->model = new estanteriaModel();
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
     }
    public function save($modulo, $posicion, $idLinea){
        $idEstanteria = $this->model->insertar($modulo, $posicion, $idLinea);
        return ($idEstanteria != false) ? 
        header("Location:index.php") : 
        header("Location:creat.php");
    } 
     public function update($idEstanteria, $idParte, $idLinea){
        return ($this->model->update($idEstanteria, $idParte, $idLinea) != false) ? 
        header("Location:index.php") : 
        header("Location:index.php");
     }

     public function show($idEstanteria){
        return ($this->model->show($idEstanteria) != false) ? $this->model->show($idEstanteria) : 
        header("Location:index.php");
     }
    public function delete($idEstanteria){
        return ($this->model->delete($idEstanteria)) ? 
        header("Location:index.php") : 
        header("Location:show.php?id=".$idEstanteria);
    }
    public function showParte(){
        return ($this->model->showParte()) ? $this->model->showParte() : false;
     }
     public function getLinea()
     {
        return ($this->model->getLinea()) ? $this->model->getLinea() : false;
     }
}
