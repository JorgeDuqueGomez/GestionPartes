<?php

class estacionModel
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
        $stament = $this->PDO->prepare("SELECT a.idEstacion, a.nombreEstacion, b.idLinea ,b.nombreLinea, c.nombreEstado
        FROM estacion as a
        JOIN linea as b
        ON a.idLinea = b.idLinea
        JOIN estado as c
        ON a.idEstado = c.idEstado
        ORDER BY b.idLinea ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($idLinea, $nombreEstacion)
    {
        $stament = $this->PDO->prepare("INSERT INTO estacion VALUES(NULL, :idLinea, :nombreEstacion, '1' , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idEstacion, $idLinea, $nombreEstacion, $idEstado)
    {
        $stament = $this->PDO->prepare(
            "UPDATE estacion SET 
        idEstacion = :idEstacion , 
        idLinea = :idLinea , 
        nombreEstacion = :nombreEstacion , 
        idEstado= :idEstado , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idEstacion =:idEstacion"
        );
        $stament->bindParam(":idEstacion", $idEstacion);
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $idEstacion : false;
    }
    public function delete($idEstacion)
    {
        $stament = $this->PDO->prepare("DELETE FROM estacion WHERE idEstacion = :idEstacion");
        $stament->bindParam(":idEstacion", $idEstacion);
        return ($stament->execute()) ? true : false;
    }
    public function show($idEstacion)
    {
        $stament = $this->PDO->prepare(
        "SELECT a.idEstacion ,a.idLinea ,b.nombreLinea ,
        a.idEstacion ,a.nombreEstacion ,a.idEstado, d.nombreEstado
        FROM estacion as a
        JOIN linea as b
        ON a.idLinea = b.idLinea
        JOIN estado as d
        ON a.idEstado = d.idEstado
        WHERE idEstacion = :idEstacion"
        );
        $stament->bindParam(":idEstacion", $idEstacion);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function showEstado()
    {
        $stament = $this->PDO->prepare("SELECT idEstado, nombreEstado FROM estado");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getEstado()
    {
        $stament = $this->PDO->query("SELECT idEstado, nombreEstado, accion FROM estado");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLinea()
    {
        $stament = $this->PDO->query("SELECT idLinea, nombreLinea FROM linea");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLateralidad()
    {
        $stament = $this->PDO->query("SELECT idLateralidad, nombreLateralidad FROM lateralidad");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
