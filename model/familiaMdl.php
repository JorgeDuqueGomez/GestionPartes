<?php

class familiaModel
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
        FROM familia");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreFamilia)
    {
        $stament = $this->PDO->prepare("INSERT INTO familia VALUES( NULL, :nombreFamilia, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreFamilia", $nombreFamilia);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idFamilia, $nombreFamilia)
    {
        $stament = $this->PDO->prepare(
        "UPDATE familia SET 
        idFamilia = :idFamilia , 
        nombreFamilia = :nombreFamilia , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idFamilia =:idFamilia"
        );
        $stament->bindParam(":idFamilia", $idFamilia);
        $stament->bindParam(":nombreFamilia", $nombreFamilia);
        return ($stament->execute()) ? $idFamilia : false;
    }
    public function delete($idFamilia)
    {
        $stament = $this->PDO->prepare("DELETE FROM familia WHERE idFamilia = :idFamilia");
        $stament->bindParam(":idFamilia", $idFamilia);
        return ($stament->execute()) ? true : false;
    }
    public function show($idFamilia)
    {
        $stament = $this->PDO->prepare(
        "SELECT *
        FROM familia
        WHERE idFamilia = :idFamilia"
        );
        $stament->bindParam(":idFamilia", $idFamilia);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

}
