<?php

class estanteriaController
{
    private $model;
    public function __construct()
    {
        require_once("c:/wamp64/www/HINO/model/estanteriaMdl.php");
        $this->model = new estanteriaModel();
    }
    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
     }
    public function save($idParte, $modulo, $posicion, $orden){
        $idEstanteria = $this->model->insertar($idParte, $modulo, $posicion, $orden);
        return ($idEstanteria != false) ? 
        header("Location:index.php") : 
        header("Location:creat.php");
    } 
     public function update($idGrupo, $codigo, $nombreGrupo){
        return ($this->model->update($idGrupo, $codigo, $nombreGrupo) != false) ? 
        header("Location:index.php") : 
        header("Location:index.php");
     }

     public function show($idGrupo){
        return ($this->model->show($idGrupo) != false) ? $this->model->show($idGrupo) : 
        header("Location:index.php");
     }
    public function delete($idGrupo){
        return ($this->model->delete($idGrupo)) ? 
        header("Location:index.php") : 
        header("Location:show.php?id=".$idGrupo);
    }
    public function showParte(){
        return ($this->model->showParte()) ? $this->model->showParte() : false;
     }

}
