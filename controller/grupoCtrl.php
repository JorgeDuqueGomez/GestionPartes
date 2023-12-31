<?php

class grupoController
{
    private $model;
    public function __construct()
    {
        require_once(__DIR__ ."/../model/grupoMdl.php");
        $this->model = new grupoModel();
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function save($codigo, $nombreGrupo)
    {
        $idGrupo = $this->model->insertar($codigo, $nombreGrupo);
        return ($idGrupo != false) ?
            header("Location:index.php") :
            header("Location:creat.php");
    }
    public function update($idGrupo, $codigo, $nombreGrupo)
    {
        return ($this->model->update($idGrupo, $codigo, $nombreGrupo) != false) ?
            header("Location:index.php") :
            header("Location:index.php");
    }

    public function show($idGrupo)
    {
        return ($this->model->show($idGrupo) != false) ? $this->model->show($idGrupo) :
            header("Location:index.php");
    }
    public function delete($idGrupo)
    {
        return ($this->model->delete($idGrupo)) ?
            header("Location:index.php") :
            header("Location:show.php?id=" . $idGrupo);
    }
}
