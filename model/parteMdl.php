<?php

class parteModel
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
        FROM parte
        ORDER BY nombreParte ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreParte, $numeroParte)
    {
        $stament = $this->PDO->prepare("INSERT INTO parte VALUES(NULL, :nombreParte, :numeroParte , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreParte", $nombreParte);
        $stament->bindParam(":numeroParte", $numeroParte);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idParte, $nombreParte, $numeroParte)
    {
        $stament = $this->PDO->prepare(
        "UPDATE parte SET 
        idParte = :idParte ,
        nombreParte = :nombreParte , 
        numeroParte = :numeroParte ,  
    
        updateAt = CURRENT_TIMESTAMP 
        WHERE idParte =:idParte");
        $stament->bindParam(":idParte", $idParte);
        $stament->bindParam(":nombreParte", $nombreParte);
        $stament->bindParam(":numeroParte", $numeroParte);

        return ($stament->execute()) ? $idParte : false;
    }
    public function delete($idParte)
    {
        $stament = $this->PDO->prepare("DELETE FROM parte WHERE idParte = :idParte");
        $stament->bindParam(":idParte", $idParte);
        return ($stament->execute()) ? true : false;
    }
    public function show($idParte)
    {
        $stament = $this->PDO->prepare("SELECT *
        FROM parte
        WHERE idParte = :idParte");
        $stament->bindParam(":idParte", $idParte);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

}
