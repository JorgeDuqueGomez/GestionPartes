<?php

class lateralidadModel
{
    private $PDO;
    public function __construct()
    {

        require_once("c:/wamp64/www/HINO/config/conexion.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function index()
    {
        $stament = $this->PDO->prepare("SELECT *
        FROM lateralidad");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreLateralidad)
    {
        $stament = $this->PDO->prepare("INSERT INTO lateralidad VALUES(NULL,:nombreLateralidad, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreLateralidad", $nombreLateralidad);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idLateralidad, $nombreLateralidad)
    {
        $stament = $this->PDO->prepare(
            "UPDATE lateralidad SET 
        idLateralidad = :idLateralidad , 
        nombreLateralidad = :nombreLateralidad , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idLateralidad =:idLateralidad"
        );
        $stament->bindParam(":idLateralidad", $idLateralidad);
        $stament->bindParam(":nombreLateralidad", $nombreLateralidad);
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
