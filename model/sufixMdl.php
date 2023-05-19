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
        $stament = $this->PDO->prepare("SELECT a.idSufix, g.nombreSerie, b.nombreFamilia, c.nombreModelo, a.proyecto, a.nombreSufix, a.codigoModelo, e.nombreDestino, f.nombreEstado
        FROM sufix as a
        JOIN familia as b
        ON a.idFamilia = b.idFamilia
        JOIN modelo as c
        ON a.idModelo = c.idModelo
        JOIN destino as e
        ON a.idDestino = e.idDestino
        JOIN estado as f
        ON a.idEstado = f.idEstado
        JOIN serie as g
        ON c.idSerie = g.idSerie
        ORDER BY c.idModelo ASC, c.nombreModelo ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($idFamilia, $idModelo, $proyecto, $nombreSufix, $codigoModelo, $idDestino)
    {
        $stament = $this->PDO->prepare("INSERT INTO sufix VALUES(NULL, :idFamilia, :idModelo , :proyecto, :nombreSufix, :codigoModelo, :idDestino, '1' , CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":idFamilia", $idFamilia);
        $stament->bindParam(":idModelo", $idModelo);
        $stament->bindParam(":proyecto", $proyecto);
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":codigoModelo", $codigoModelo);
        $stament->bindParam(":idDestino", $idDestino);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function update($idSufix, $idFamilia, $idModelo, $proyecto, $nombreSufix, $codigoModelo ,$idDestino, $idEstado)
    {
        $stament = $this->PDO->prepare(
            "UPDATE sufix SET 
        idSufix = :idSufix ,
        idFamilia = :idFamilia , 
        idModelo = :idModelo ,  
        proyecto = :proyecto , 
        nombreSufix = :nombreSufix , 
        codigoModelo = :codigoModelo , 
        idDestino = :idDestino , 
        idEstado = :idEstado , 
        updateAt = CURRENT_TIMESTAMP 
        WHERE idSufix =:idSufix");
        $stament->bindParam(":idSufix", $idSufix);
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
        $stament = $this->PDO->prepare("SELECT 

        c.idSerie,
        g.nombreSerie, 
        b.idFamilia,
        b.nombreFamilia, 
        c.idModelo,
        c.nombreModelo, 
        a.proyecto, 
        a.nombreSufix, 
        a.codigoModelo,
        e.idDestino,
        e.nombreDestino,
        f.idEstado, 
        f.nombreEstado,
        a.idSufix

        FROM sufix as a
        JOIN familia as b
        ON a.idFamilia = b.idFamilia
        JOIN modelo as c
        ON a.idModelo = c.idModelo
        JOIN destino as e
        ON a.idDestino = e.idDestino
        JOIN estado as f
        ON a.idEstado = f.idEstado
        JOIN serie as g
        ON c.idSerie = g.idSerie
        WHERE a.idSufix = :idSufix");
        $stament->bindParam(":idSufix", $idSufix);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function showGrupos()
    {
        $stament = $this->PDO->prepare("SELECT g.nombreSerie, b.nombreFamilia, c.nombreModelo, a.proyecto, a.nombreSufix, a.codigoModelo, e.nombreDestino
        FROM sufix as a
        JOIN familia as b
        ON a.idFamilia = b.idFamilia
        JOIN modelo as c
        ON a.idModelo = c.idModelo
        JOIN destino as e
        ON a.idDestino = e.idDestino
        JOIN estado as f
        ON a.idEstado = f.idEstado
        JOIN serie as g
        ON c.idSerie = g.idSerie
        WHERE a.idEstado = '1'
        ORDER BY c.idModelo ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function showEstado()
    {
        $stament = $this->PDO->prepare("SELECT idEstado, nombreEstado FROM estado");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getSerie()
    {
        $stament = $this->PDO->query("SELECT idSerie, nombreSerie FROM serie");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEstado()
    {
        $stament = $this->PDO->query("SELECT idEstado, nombreEstado, accion FROM estado");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getFamilia()
    {
        $stament = $this->PDO->query("SELECT idFamilia, nombreFamilia FROM familia");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getModelo()
    {
        $stament = $this->PDO->query("SELECT idModelo, nombreModelo FROM modelo");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDestino()
    {
        $stament = $this->PDO->query("SELECT idDestino, nombreDestino FROM destino");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
