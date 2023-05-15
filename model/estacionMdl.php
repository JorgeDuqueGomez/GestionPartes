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
        $stament = $this->PDO->prepare("SELECT a.idEstacion, b.nombreLinea, a.nombreEstacion , c.NombreLateralidad , d.nombreEstado
        FROM estacion as a
        JOIN linea as b
        ON a.idLinea = b.idLinea
        JOIN lateralidad as c
        ON a.idLateralidad = c.idLateralidad
        JOIN estado as d
        ON a.idEstado = d.idEstado
        ORDER BY b.nombreLinea ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($idLinea , $nombreEstacion, $idLateralidad)
    {
        $stament = $this->PDO->prepare("INSERT INTO estacion VALUES(NULL, :idLinea, :nombreEstacion, :idLateralidad, '1' , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        $stament->bindParam(":idLateralidad", $idLateralidad);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idEstacion, $idLinea, $nombreEstacion, $idLateralidad , $idEstado)
    {
        $stament = $this->PDO->prepare(
        "UPDATE estacion SET 
        idEstacion = :idEstacion , 
        idLinea = :idLinea , 
        nombreEstacion = :nombreEstacion , 
        idLateralidad = :idLateralidad , 
        idEstado= :idEstado , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idEstacion =:idEstacion");
        $stament->bindParam(":idEstacion", $idEstacion);
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        $stament->bindParam(":idLateralidad", $idLateralidad);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $idEstacion : false;
    }
    public function delete($idLinea)
    {
        $stament = $this->PDO->prepare("DELETE FROM linea WHERE idLinea = :idLinea");
        $stament->bindParam(":idLinea", $idLinea);
        return ($stament->execute()) ? true : false;
    }
    public function show($idEstacion)
    {
        $stament = $this->PDO->prepare(
        "SELECT a.idEstacion ,a.idLinea ,b.nombreLinea ,
        a.idEstacion ,a.nombreEstacion ,a.idLateralidad ,c.nombreLateralidad ,
        a.idEstado, d.nombreEstado
        FROM estacion as a
        JOIN linea as b
        ON a.idLinea = b.idLinea
        JOIN lateralidad as c
        ON a.idLateralidad = c.idLateralidad
        JOIN estado as d
        ON a.idEstado = d.idEstado
        WHERE idEstacion = :idEstacion");
        $stament->bindParam(":idEstacion", $idEstacion);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function showEstado()
    {
        $stament = $this->PDO->prepare("SELECT idEstado, nombreEstado FROM estado");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getEstado() {
        $stament = $this->PDO->query("SELECT idEstado, nombreEstado, accion FROM estado");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLinea() {
        $stament = $this->PDO->query("SELECT idLinea, nombreLinea FROM linea");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLateralidad() {
        $stament = $this->PDO->query("SELECT idLateralidad, nombreLateralidad FROM lateralidad");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
