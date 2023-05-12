<?php

class estacionModel
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
        $stament = $this->PDO->prepare(
        "SELECT a.idEstacion , b.nombreLinea , a.nombreEstacion  , c.nombreLateralidad , d.nombreEstado
        FROM estacion as a
        INNER JOIN  linea as b
        ON a.idLinea = b.idLinea
        INNER JOIN lateralidad as c
        ON a.idLateralidad = c.idLateralidad
        INNER JOIN estado as d
        ON a.idEstado = d.idEstado");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }    
    public function insertar($nombreEstacion,$idLinea,$idLateralidad,$idEstado)
    {
        $stament = $this->PDO->prepare("INSERT INTO estacion VALUES(NULL, :nombreEstacion , :idLinea , :idLateralidad, :idEstado , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":idLateralidad", $idLateralidad);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($idEstacion)
    {
        $stament = $this->PDO->prepare("SELECT a.idEstacion , b.nombreLinea , a.nombreEstacion  , c.nombreLateralidad , d.nombreEstado
        FROM estacion as a
        INNER JOIN  linea as b
        ON a.idLinea = b.idLinea
        INNER JOIN lateralidad as c
        ON a.idLateralidad = c.idLateralidad
        INNER JOIN estado as d
        ON a.idEstado = d.idEstado
        WHERE idEstacion = :idEstacion");
        $stament->bindParam(":idEstacion", $idEstacion);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function update($idEstacion, $idLinea, $nombreEstacion, $idLateralidad, $idEstado)
    {
        $stament = $this->PDO->prepare("UPDATE estacion 
        SET idEstacion = :idEstacion , 
        idLinea = :idLinea , 
        nombreEstacion = :nombreEstacion , 
        idLateralidad = :idLateralidad ,
        idEstado = :idEstado ,  
        updateAt = CURRENT_TIMESTAMP 
        WHERE idEstacion = :idEstacion");
        $stament->bindParam(":idEstacion", $idEstacion);
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        $stament->bindParam(":idLateralidad", $idLateralidad);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $idEstacion : false;
    }

    public function delete($idLateralidad)
    {
        $stament = $this->PDO->prepare("DELETE FROM lateralidad WHERE idLateralidad = :idLateralidad");
        $stament->bindParam(":idLateralidad", $idLateralidad);
        return ($stament->execute()) ? true : false;
    }
}
