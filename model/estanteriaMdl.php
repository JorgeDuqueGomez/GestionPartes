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
        $stament = $this->PDO->prepare("SELECT a.modulo, a.posicion ,b.nombreEstado2, c.nombreParte, c.numeroParte, a.orden, a.idEstanteria
        FROM estanteria as a
        JOIN estado as b
        ON a.idEstado = b.idEstado
        LEFT JOIN parte as c
        ON a.idParte = c.idParte
        ORDER BY a.orden ASC

        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($modulo, $posicion)
    {
        $maxOrdenQuery = $this->PDO->prepare("SELECT MAX(orden) FROM estanteria");
        $maxOrdenQuery->execute();
        $maxOrden = $maxOrdenQuery->fetchColumn();
        $orden = $maxOrden + 1;
    
        $stament = $this->PDO->prepare("INSERT INTO estanteria VALUES(NULL, NULL, :modulo, :posicion, :orden, '2', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":modulo", $modulo);
        $stament->bindParam(":posicion", $posicion);
        $stament->bindParam(":orden", $orden);
    
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($idEstanteria)
    {
        $stament = $this->PDO->prepare(
            "SELECT * 
            FROM estanteria 
            WHERE idEstanteria = :idEstanteria");
        $stament->bindParam(":idEstanteria", $idEstanteria);
        return ($stament->execute()) ? $stament->fetch() : false;
    }
    public function update($idEstanteria, $idParte)
    {
        $stament = $this->PDO->prepare("UPDATE estanteria SET idEstanteria = :idEstanteria , idParte = :idParte , idEstado = '1' , updateAt = CURRENT_TIMESTAMP WHERE idEstanteria =:idEstanteria");
        $stament->bindParam(":idEstanteria", $idEstanteria);
        $stament->bindParam(":idParte", $idParte);
        return ($stament->execute()) ? $idEstanteria : false;
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
}
