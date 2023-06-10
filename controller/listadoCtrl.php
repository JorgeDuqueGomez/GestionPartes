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

}
