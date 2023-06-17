<?php

class modeloModel
{
    private $PDO;
    public function __construct()
    {

        require_once(__DIR__ ."/../config/conexion.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function index()
    {
        $stament = $this->PDO->prepare("SELECT *
        FROM modelo");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreModelo)
    {
        $stament = $this->PDO->prepare("INSERT INTO modelo VALUES( NULL, :nombreModelo, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreModelo", $nombreModelo);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($idModelo)
    {
        $stament = $this->PDO->prepare(
        "SELECT *
        FROM modelo
        WHERE idModelo = :idModelo"
        );
        $stament->bindParam(":idModelo", $idModelo);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function update($idModelo, $nombreModelo)
    {
        $stament = $this->PDO->prepare(
        "UPDATE modelo SET 
        idModelo = :idModelo , 
        nombreModelo = :nombreModelo , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idModelo =:idModelo"
        );
        $stament->bindParam(":idModelo", $idModelo);
        $stament->bindParam(":nombreModelo", $nombreModelo);
        return ($stament->execute()) ? $idModelo : false;
    }
    public function delete($idModelo)
    {
        $stament = $this->PDO->prepare("DELETE FROM modelo WHERE idModelo = :idModelo");
        $stament->bindParam(":idModelo", $idModelo);
        return ($stament->execute()) ? true : false;
    }


}
