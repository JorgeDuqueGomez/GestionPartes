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
        $stament = $this->PDO->prepare("SELECT a.idSufix, a.proyecto, a.nombreSufix, a.codigoModelo ,b.nombreSerie, c.nombreFamilia, d.nombreModelo, e.nombreDestino, f.nombreEstado
        FROM sufix as a
        JOIN serie as b
        ON a.idSerie = b.idSerie
        JOIN familia as c
        ON a.idFamilia = c.idFamilia
        JOIN modelo as d
        ON a.idModelo = d.idModelo
        JOIN destino as e
        ON a.idDestino = e.idDestino
        JOIN estado as f
        ON a.idEstado = f.idEstado
        -- WHERE a.idEstado = '1'
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($idSerie, $idFamilia, $idModelo, $proyecto ,$nombreSufix, $codigoModelo, $idDestino)
    {
        $stament = $this->PDO->prepare("INSERT INTO sufix 
        VALUES(NULL, :idSerie, :idFamilia, :idModelo, :proyecto , :nombreSufix , :codigoModelo, :idDestino, '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":idSerie", $idSerie);
        $stament->bindParam(":idFamilia", $idFamilia);
        $stament->bindParam(":idModelo", $idModelo);
        $stament->bindParam(":proyecto", $proyecto);
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":codigoModelo", $codigoModelo);
        $stament->bindParam(":idDestino", $idDestino);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idSufix, $idSerie, $idFamilia, $idModelo, $proyecto ,$nombreSufix, $codigoModelo, $idDestino, $idEstado)
    {
        $stament = $this->PDO->prepare(
            "UPDATE sufix SET 
        idSufix = :idSufix , 
        idSerie = :idSerie , 
        idFamilia = :idFamilia , 
        idModelo = :idModelo , 
        proyecto = :proyecto , 
        nombreSufix = :nombreSufix , 
        codigoModelo = :codigoModelo , 
        idDestino = :idDestino , 
        idEstado = :idEstado , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idSufix = :idSufix");
        $stament->bindParam(":idSufix", $idSufix);
        $stament->bindParam(":idSerie", $idSerie);
        $stament->bindParam(":idFamilia", $idFamilia);
        $stament->bindParam(":idModelo", $idModelo);
        $stament->bindParam(":proyecto", $proyecto);
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":codigoModelo", $codigoModelo);
        $stament->bindParam(":idDestino", $idDestino);
        $stament->bindParam(":idEstado", $idEstado);

        return ($stament->execute()) ? $idSufix : false;

    }
    public function delete($idSufix)
    {
        $stament = $this->PDO->prepare("DELETE FROM sufix WHERE idSufix = :idSufix");
        $stament->bindParam(":idSufix", $idSufix);
        return ($stament->execute()) ? true : false;
    }
    public function show($idSufix)
    {
        $stament = $this->PDO->prepare(
        "SELECT a.idSufix, a.idSerie, b.nombreSerie, a.idFamilia, c.nombreFamilia, a.idModelo, d.nombreModelo, a.proyecto, a.nombreSufix, a.codigoModelo, a.idDestino, e.nombreDestino, a.idEstado, f.nombreEstado
        FROM sufix as a
        JOIN serie as b
        ON a.idSerie = b.idSerie
        JOIN familia as c
        ON a.idFamilia = c.idFamilia
        JOIN modelo as d
        ON a.idModelo = d.idModelo
        JOIN destino as e
        ON a.idDestino = e.idDestino
        JOIN estado as f
        ON a.idEstado = f.idEstado

        WHERE idSufix = :idSufix"
        );
        $stament->bindParam(":idSufix", $idSufix);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function getSerie()
    {
        $stament = $this->PDO->query("SELECT * FROM serie");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getFamilia()
    {
        $stament = $this->PDO->query("SELECT * FROM familia");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getModelo()
    {
        $stament = $this->PDO->query("SELECT * FROM modelo");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDestino()
    {
        $stament = $this->PDO->query("SELECT * FROM destino");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEstado()
    {
        $stament = $this->PDO->query("SELECT * FROM estado");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
