<?php

class lineaModel
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
        $stament = $this->PDO->prepare("SELECT A.idLinea, a.nombreLinea, b.nombreEstado
        FROM linea as a
        JOIN estado as b
        ON a.idEstado = b.valorEstado
        ORDER BY b.nombreEstado, a.idLinea ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreLinea, $idEstado)
    {
        $stament = $this->PDO->prepare("INSERT INTO linea VALUES(NULL, :nombreLinea, :idEstado, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreLinea", $nombreLinea);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idLinea, $nombreLinea, $idEstado)
    {
        $stament = $this->PDO->prepare("UPDATE linea SET idLinea = :idLinea , nombreLinea = :nombreLinea , idEstado= :idEstado , updateAt = CURRENT_TIMESTAMP WHERE idLinea =:idLinea");
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreLinea", $nombreLinea);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $idLinea : false;
    }
    public function delete($idLateralidad)
    {
        $stament = $this->PDO->prepare("DELETE FROM lateralidad WHERE idLateralidad = :idLateralidad");
        $stament->bindParam(":idLateralidad", $idLateralidad);
        return ($stament->execute()) ? true : false;
    }
    public function show($idLinea)
    {
        $stament = $this->PDO->prepare("SELECT * FROM linea WHERE idLinea = :idLinea");
        $stament->bindParam(":idLinea", $idLinea);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function showEstado()
    {
        $stament = $this->PDO->prepare("SELECT idEstado, nombreEstado FROM estado");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getEstado() {
        $stament = $this->PDO->query("SELECT idEstado, nombreEstado FROM estado");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
