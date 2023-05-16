<?php

class sufixModel
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
        $stament = $this->PDO->prepare("SELECT a.idSufix, b.nombreFamilia, c.nombreModelo, a.proyecto, a.nombreSufix, a.codigoModelo, e.nombreDestino, f.nombreEstado
        FROM sufix as a
        JOIN familia as b
        ON a.idFamilia = b.idFamilia
        JOIN modelo as c
        ON a.idModelo = c.idModelo
        JOIN destino as e
        ON a.idDestino = e.idDestino
        JOIN estado as f
        ON a.idEstado = f.idEstado
        ORDER BY c.idModelo ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($nombreModelo, $idSerie)
    {
        $stament = $this->PDO->prepare("INSERT INTO modelo VALUES(NULL, :nombreModelo, :idSerie , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":nombreModelo", $nombreModelo);
        $stament->bindParam(":idSerie", $idSerie);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idModelo, $nombreModelo, $idSerie)
    {
        $stament = $this->PDO->prepare(
            "UPDATE modelo SET 
        idModelo = :idModelo , 
        nombreModelo = :nombreModelo ,  
        idSerie = :idSerie , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idModelo =:idModelo"
        );
        $stament->bindParam(":idModelo", $idModelo);
        $stament->bindParam(":nombreModelo", $nombreModelo);
        $stament->bindParam(":nombreEstacion", $nombreEstacion);
        $stament->bindParam(":idSerie", $idSerie);
        return ($stament->execute()) ? $idModelo : false;
    }
    public function delete($idModelo)
    {
        $stament = $this->PDO->prepare("DELETE FROM modelo WHERE idModelo = :idModelo");
        $stament->bindParam(":idModelo", $idModelo);
        return ($stament->execute()) ? true : false;
    }
    public function show($idModelo)
    {
        $stament = $this->PDO->prepare("SELECT a.idModelo, a.nombreModelo, a.idSerie, b.nombreSerie
        FROM modelo as a
        JOIN serie as b
        ON a.idSerie = b.idSerie
        WHERE idModelo = :idModelo");
        $stament->bindParam(":idModelo", $idModelo);
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
    public function getSerie()
    {
        $stament = $this->PDO->query("SELECT idSerie, nombreSerie FROM serie");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
