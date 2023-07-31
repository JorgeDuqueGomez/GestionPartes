<?php

class loteModel
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
        $stament = $this->PDO->prepare("SELECT b.idLote, b.lote, a.nombreSufix, c.nombreModelo, a.proyecto, b.updateAt
        
            FROM sufix AS a
            JOIN lote AS b
            ON a.idSufix = b.idSufix 
            JOIN modelo AS c
            ON a.idModelo = c.idModelo

        
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreSerie)
    {
        $stament = $this->PDO->prepare("INSERT INTO serie VALUES( NULL, :nombreSerie, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreSerie", $nombreSerie);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($idSerie)
    {
        $stament = $this->PDO->prepare(
        "SELECT *
        FROM serie
        WHERE idSerie = :idSerie"
        );
        $stament->bindParam(":idSerie", $idSerie);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function update($idSerie, $nombreSerie)
    {
        $stament = $this->PDO->prepare(
        "UPDATE serie SET 
        idSerie = :idSerie , 
        nombreSerie = :nombreSerie , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idSerie =:idSerie"
        );
        $stament->bindParam(":idSerie", $idSerie);
        $stament->bindParam(":nombreSerie", $nombreSerie);
        return ($stament->execute()) ? $idSerie : false;
    }
    public function delete($idSerie)
    {
        $stament = $this->PDO->prepare("DELETE FROM serie WHERE idSerie = :idSerie");
        $stament->bindParam(":idSerie", $idSerie);
        return ($stament->execute()) ? true : false;
    }


}
