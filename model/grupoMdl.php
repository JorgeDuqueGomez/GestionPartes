<?php

class grupoModel
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
        $stament = $this->PDO->prepare("SELECT * FROM grupo ORDER BY codigo ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function insertar($codigo, $nombreGrupo)
    {
        $sql = "SELECT COUNT(idGrupo) FROM grupo WHERE codigo = :codigo OR nombreGrupo = :nombreGrupo";
        $statement = $this->PDO->prepare($sql);
        $statement->bindParam(":codigo", $codigo);
        $statement->bindParam(':nombreGrupo', $nombreGrupo);
        $statement->execute();
        $resultado = $statement->fetchColumn();
        
        if ($resultado > 0) {
            // El grupo ya existe en la base de datos, retornar false
            return false;
        } else {
            // El grupo no existe, realizar la inserción
            $statement = $this->PDO->prepare("INSERT INTO grupo VALUES(NULL, :codigo, :nombreGrupo, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $statement->bindParam(":codigo", $codigo);
            $statement->bindParam(":nombreGrupo", $nombreGrupo);
            return $statement->execute();
        }
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
}
