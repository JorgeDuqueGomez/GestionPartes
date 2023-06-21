<?php

class estanteriaModel
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
        $stament = $this->PDO->prepare("SELECT a.modulo, a.posicion ,b.nombreEstado2, c.nombreParte, c.numeroParte, a.orden, a.idEstanteria, d.nombreLinea
        FROM estanteria as a
        JOIN estado as b
        ON a.idEstado = b.idEstado
        LEFT JOIN parte as c
        ON a.idParte = c.idParte
        JOIN linea AS d
        ON a.idLinea = d.idLinea

        ORDER BY a.orden ASC

        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($modulo, $posicion, $idLinea)
    {
        $maxOrdenQuery = $this->PDO->prepare("SELECT MAX(orden) FROM estanteria");
        $maxOrdenQuery->execute();
        $maxOrden = $maxOrdenQuery->fetchColumn();
        $orden = $maxOrden + 1;
    
        $stament = $this->PDO->prepare("INSERT INTO estanteria VALUES(NULL, NULL, :idLinea, :modulo, :posicion, :orden, '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":idLinea", $idLinea);
        $stament->bindParam(":modulo", $modulo);
        $stament->bindParam(":posicion", $posicion);
        $stament->bindParam(":orden", $orden);
    
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($idEstanteria)
    {
        $stament = $this->PDO->prepare(
            "SELECT a.idEstanteria, a.modulo, a.posicion, b.idParte, b.numeroParte, b.nombreParte, c.idLinea, c.nombreLinea, d.nombreEstado2
            FROM estanteria AS a
            LEFT JOIN parte AS b
            ON a.idParte = b.idParte
            LEFT JOIN linea AS c
            ON a.idLinea = c.idLinea
            JOIN estado AS d
            ON a.idEstado = d.idEstado

            WHERE a.idEstanteria = :idEstanteria");
        $stament->bindParam(":idEstanteria", $idEstanteria);
        return ($stament->execute()) ? $stament->fetch() : false;
    }


    public function update($idEstanteria, $idParte, $idLinea)
    {
        if ($idParte === '') {
            $idEstado = '2';
        } else {
            $idEstado = '1';
        }
        $statement = $this->PDO->prepare("UPDATE estanteria SET idEstanteria = :idEstanteria, idParte = :idParte, idLinea = :idLinea, idEstado = :idEstado, updateAt = CURRENT_TIMESTAMP WHERE idEstanteria = :idEstanteria");
        $statement->bindParam(":idEstanteria", $idEstanteria);
        $statement->bindParam(":idParte", $idParte);
        $statement->bindParam(":idLinea", $idLinea);
        $statement->bindParam(":idEstado", $idEstado);
        
        return ($statement->execute()) ? $idEstanteria : false;
    }
    
    public function delete($idEstanteria)
    {
        $stament = $this->PDO->prepare("UPDATE estanteria SET idParte = NULL , idEstado = '2' WHERE idEstanteria =:idEstanteria");
        $stament->bindParam(":idEstanteria", $idEstanteria);
        return ($stament->execute()) ? true : false;
    }
    public function showParte()
    {
        $stament = $this->PDO->prepare("SELECT idParte, numeroParte, nombreParte 
        FROM parte
        WHERE idMaterial = '1'
        ORDER BY numeroParte ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getLinea()
    {
        $stament = $this->PDO->query("SELECT * FROM linea");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
