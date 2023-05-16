<?php

class modeloController
{
    private $model;
    public function __construct()
    {
        require_once("c:/wamp64/www/HINO/model/modeloMdl.php");
        $this->model = new modeloModel();
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
     }
    public function save($nombreModelo ,$idSerie){
        $idModelo = $this->model->insertar($nombreModelo ,$idSerie);
        return ($idModelo != false) ? 
        header("Location:index.php") : 
        header("Location:creat.php");
    } 
     public function update($idModelo,$nombreModelo, $idSerie){
        return ($this->model->update($idModelo,$nombreModelo, $idSerie) != false) ? 
        header("Location:index.php") : 
        header("Location:index.php");
     }
    public function delete($idModelo){
        return ($this->model->delete($idModelo)) ? 
        header("Location:index.php") : 
        header("Location:index.php");
    }
    public function show($idModelo){
        return ($this->model->show($idModelo) != false) ? $this->model->show($idModelo) : 
        header("Location:index.php");
     }
     public function showEstado(){
        return ($this->model->showEstado()) ? $this->model->showEstado() : false;
     }
     public function getEstado(){
        return ($this->model->getEstado()) ? $this->model->getEstado() : false;
     }
     public function getLinea(){
        return ($this->model->getLinea()) ? $this->model->getLinea() : false;
     }
     public function getSerie(){
        return ($this->model->getSerie()) ? $this->model->getSerie() : false;
     }
}
