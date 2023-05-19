<?php

class parteController
{
    private $model;
    public function __construct()
    {
        require_once("c:/wamp64/www/HINO/model/parteMdl.php");
        $this->model = new parteModel();
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
     }
    public function save($nombreParte, $numeroParte){
        $idParte = $this->model->insertar($nombreParte, $numeroParte);
        return ($idParte != false) ? 
        header("Location:index.php") : 
        header("Location:creat.php");
    } 
     public function update($idParte, $nombreParte, $numeroParte){
        return ($this->model->update($idParte, $nombreParte, $numeroParte) != false) ? 
        header("Location:index.php") : 
        header("Location:index.php");
     }
    public function delete($idParte){
        return ($this->model->delete($idParte)) ? 
        header("Location:index.php") : 
        header("Location:index.php");
    }
    public function show($idParte){
        return ($this->model->show($idParte) != false) ? $this->model->show($idParte) : 
        header("Location:index.php");
     }
}
