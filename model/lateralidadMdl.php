<?php

class lateralidadModel
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
        FROM lateralidad
        ORDER BY idLateralidad ASC
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreLateralidad, $nombreCorto)
    {
        $stament = $this->PDO->prepare("INSERT INTO lateralidad VALUES(NULL,:nombreLateralidad, :nombreCorto, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreCorto", $nombreCorto);
        $stament->bindParam(":nombreLateralidad", $nombreLateralidad);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idLateralidad, $nombreLateralidad, $nombreCorto)
    {
        $stament = $this->PDO->prepare(
            "UPDATE lateralidad SET 
        idLateralidad = :idLateralidad , 
        nombreLateralidad = :nombreLateralidad , 
        nombreCorto = :nombreCorto , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idLateralidad =:idLateralidad"
        );
        $stament->bindParam(":idLateralidad", $idLateralidad);
        $stament->bindParam(":nombreLateralidad", $nombreLateralidad);
        $stament->bindParam(":nombreCorto", $nombreCorto);
        return ($stament->execute()) ? $idLateralidad : false;
    }
    public function delete($idLateralidad)
    {
        $stament = $this->PDO->prepare("DELETE FROM lateralidad WHERE idLateralidad = :idLateralidad");
        $stament->bindParam(":idLateralidad", $idLateralidad);
        return ($stament->execute()) ? true : false;
    }
    public function show($idLateralidad)
    {
        $stament = $this->PDO->prepare(
            "SELECT *
        FROM lateralidad
        WHERE idLateralidad = :idLateralidad"
        );
        $stament->bindParam(":idLateralidad", $idLateralidad);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
}
