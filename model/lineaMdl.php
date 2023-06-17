<?php

class lineaModel
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
        $stament = $this->PDO->prepare("SELECT a.idLinea ,a.nombreLinea, b.nombreEstado
        FROM linea as a
        JOIN estado as b
        ON a.idEstado = b.idEstado");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreLinea)
    {
        $stament = $this->PDO->prepare("INSERT INTO linea VALUES( NULL, :nombreLinea, '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreLinea", $nombreLinea);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idLinea, $nombreLinea, $idEstado)
    {
        $stament = $this->PDO->prepare(
        "UPDATE linea SET 
        idLinea = :idLinea , 
        nombreLinea = :nombreLinea , 
        idEstado= :idEstado , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idLinea =:idLinea"
        );
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":nombreLinea", $nombreLinea);
        $stament->bindParam(":idEstado", $idEstado);
        return ($stament->execute()) ? $idLinea : false;
    }
    public function delete($idLinea)
    {
        $stament = $this->PDO->prepare("DELETE FROM linea WHERE idLinea = :idLinea");
        $stament->bindParam(":idLinea", $idLinea);
        return ($stament->execute()) ? true : false;
    }
    public function show($idLinea)
    {
        $stament = $this->PDO->prepare(
        "SELECT a.idLinea ,a.nombreLinea ,b.idEstado, b.nombreEstado
        FROM linea as a
        JOIN estado as b
        ON a.idEstado = b.idEstado

        WHERE idLinea = :idLinea"
        );
        $stament->bindParam(":idLinea", $idLinea);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function getEstado()
    {
        $stament = $this->PDO->query("SELECT idEstado, nombreEstado, accion FROM estado");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
 
}
