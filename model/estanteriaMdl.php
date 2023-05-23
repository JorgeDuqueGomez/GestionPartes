<?php

class estanteriaModel
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
        $stament = $this->PDO->prepare("SELECT b.nombreParte, b.numeroParte, a.modulo, a.posicion, a.orden
        FROM estanteria as a
        JOIN parte as b
        ON a.idParte = b.idParte 
        WHERE b.idMaterial = '1'
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function insertar($idParte, $modulo, $posicion, $orden)
    { 
        $stament = $this->PDO->prepare("INSERT INTO estanteria VALUES(NULL ,:idParte ,:modulo ,:posicion ,:orden ,CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
        $stament->bindParam(":idParte", $idParte);
        $stament->bindParam(":modulo", $modulo);
        $stament->bindParam(":posicion", $posicion);
        $stament->bindParam(":orden", $orden);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($idGrupo)
    {
        $stament = $this->PDO->prepare("SELECT * FROM grupo WHERE idGrupo = :idGrupo");
        $stament->bindParam(":idGrupo", $idGrupo);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function update($idGrupo, $codigo, $nombreGrupo)
    {
        $stament = $this->PDO->prepare("UPDATE grupo SET idGrupo = :idGrupo , codigo = :codigo , nombreGrupo= :nombreGrupo , updateAt = CURRENT_TIMESTAMP WHERE idGrupo =:idGrupo");
        $stament->bindParam(":idGrupo", $idGrupo);
        $stament->bindParam(":codigo", $codigo);
        $stament->bindParam(":nombreGrupo", $nombreGrupo);
        return ($stament->execute()) ? $idGrupo : false;
    }

    public function delete($idGrupo)
    {
        $stament = $this->PDO->prepare("DELETE FROM Grupo WHERE idGrupo = :idGrupo");
        $stament->bindParam(":idGrupo", $idGrupo);
        return ($stament->execute()) ? true : false;
    }
    public function showParte()
    {
        $stament = $this->PDO->prepare("SELECT idParte, numeroParte, nombreParte 
        FROM parte
        ORDER BY numeroParte ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
}
