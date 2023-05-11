<?php

class estacionController
{
    private $model;
    public function __construct()
    {
        require_once("c:/wamp64/www/HINO/model/estacionMdl.php");
        $this->model = new estacionModel();
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
     }
    public function save($nombreEstacion,$idLinea,$idLateralidad,$idEstado){
        $idEstacion = $this->model->insertar($nombreEstacion,$idLinea,$idLateralidad,$idEstado);
        return ($idEstacion != false) ? 
        header("Location:index.php") : 
        header("Location:creat.php");
    } 
     public function update($idEstacion, $idLinea, $nombreEstacion, $idLateralidad, $idEstado){
        return ($this->model->update($idEstacion, $idLinea, $nombreEstacion, $idLateralidad, $idEstado) != false) ? 
        header("Location:index.php") : 
        header("Location:index.php");
     }

     public function show($idEstacion){
        return ($this->model->show($idEstacion) != false) ? $this->model->show($idEstacion) : 
        header("Location:index.php");
     }
    public function delete($idLateralidad){
        return ($this->model->delete($idLateralidad)) ? 
        header("Location:index.php") : 
        header("Location:show.php?id=".$idLateralidad);
    }
    public function ConsultaLinea(){
        return ($this->model->ConsultaLinea()) ? $this->model->ConsultaLinea() : false;
     }
}
