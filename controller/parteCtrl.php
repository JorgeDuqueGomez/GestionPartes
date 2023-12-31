<?php

class parteController
{
    private $model;
    public function __construct()
    {
        require_once(__DIR__ ."/../model/parteMdl.php");
        $this->model = new parteModel();
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function save($nombreParte, $numeroParte, $idMaterial)
    {
        $idParte = $this->model->insertar($nombreParte, $numeroParte, $idMaterial);
        return ($idParte != false) ?
            header("Location:index.php") :
            header("Location:creat.php");
    }
    public function saveTpm($nombreParte, $numeroParte, $idMaterial)
    {
        $idParte = $this->model->insertarTpm($nombreParte, $numeroParte, $idMaterial);
        return ($idParte != false) ?
            header("Location:../tpm/creatParte.php") :
            header("Location:../tpm/creatParte.php");
    }
    public function update($idParte, $nombreParte, $numeroParte, $idMaterial)
    {
        return ($this->model->update($idParte, $nombreParte, $numeroParte, $idMaterial) != false) ?
            header("Location:index.php") :
            header("Location:index.php");
    }
    public function delete($idParte)
    {
        return ($this->model->delete($idParte)) ?
            header("Location:index.php") :
            header("Location:index.php");
    }
    public function show($idParte)
    {
        return ($this->model->show($idParte) != false) ? $this->model->show($idParte) :
            header("Location:index.php");
    }
    public function showMaterial()
    {
        return ($this->model->showMaterial()) ? $this->model->showMaterial() : false;
    }
}
