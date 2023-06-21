<?php

class tornilleriaModel
{
    private $PDO;
    public function __construct()
    {

        require_once(__DIR__ ."/../config/conexion.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }
    public function index($idSufix, $idLinea)
    {
        $query = 
        "SELECT 
        a.cantidad, 
        a.numeroCaja, 
        b.nombreParte, 
        b.numeroParte, 
        c.orden, 
        c.modulo, 
        c.posicion, 
        d.nombreCaja, 
        e.idEstacion,
        e.nombreEstacion, 
        e.ordenAlistamiento,
        f.idLinea,
        f.nombreLinea, 
        g.idSufix,
        h.nombreCorto

        FROM listado AS a
        JOIN parte AS b
        ON a.idParte = b.idParte
        JOIN estanteria AS c
        ON b.idParte = c.idParte
        LEFT JOIN caja AS d
        ON a.idCaja = d.idCaja
        JOIN estacion AS e
        ON a.idEstacion = e.idEstacion
        JOIN linea AS f
        ON e.idLinea = f.idLinea
        JOIN sufix AS g
        ON a.idSufix = g.idSufix
        JOIN lateralidad AS h
        ON a.idLateralidad = h.idLateralidad

        WHERE b.idMaterial = '1'";

        // Construir la consulta dependiendo de los valores seleccionados
        if ($idSufix) {
            $query .= " AND a.idSufix = :idSufix";
        }
        if ($idLinea) {
            $query .= " AND f.idLinea = :idLinea";
        }
        if ($idLinea) {
            $query .= " AND c.idLinea = :idLinea";
        }
        
        $query .= " ORDER BY c.orden ASC";
    
        $statement = $this->PDO->prepare($query);
    
        // Asignar los valores a los parámetros de la consulta
        if ($idSufix) {
            $statement->bindValue(':idSufix', $idSufix);
        }
        if ($idLinea) {
            $statement->bindValue(':idLinea', $idLinea);
        }
    
        return ($statement->execute()) ? $statement->fetchAll() : false;
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
    public function getLinea()
    {
        $stament = $this->PDO->query("SELECT * FROM linea");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getModelo()
    {
        $stament = $this->PDO->query("SELECT * FROM modelo");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSufix()
    {
        $stament = $this->PDO->query("SELECT * FROM sufix");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLote()
    {
        $stament = $this->PDO->query("SELECT * FROM lote");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEstacion()
    {
        $stament = $this->PDO->query("SELECT * FROM estacion");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
