<?php

class listadoModel
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
        $stament = $this->PDO->prepare("SELECT 
        a.idListado, 
        f.nombreMaterial,
        b.nombreSufix, 
        i.nombreModelo, 
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        k.nombrePosicion
        

        FROM listado AS a
        JOIN sufix AS b
        ON a.idSufix = b.idSufix
        JOIN parte AS c
        ON a.idParte = c.idParte
        LEFT JOIN grupo AS d
        ON a.idGrupo = d.idGrupo
        JOIN material AS f
        ON c.idMaterial = f.idMaterial
        JOIN estacion AS g
        ON a.idEstacion = g.idEstacion
        JOIN lateralidad AS h
        ON g.idLateralidad = h.idLateralidad
        JOIN modelo AS i
        ON b.idModelo = i.idModelo
        LEFT JOIN caja AS j
        ON a.idCaja = j.idCaja
        LEFT JOIN posicioncaja AS k
        ON j.idPosicionCaja = k.idPosicionCaja
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getId($idListado)
    {
        $stament = $this->PDO->prepare("SELECT 
        a.idListado, 
        f.nombreMaterial,
        b.nombreSufix, 
        i.nombreModelo, 
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        k.nombrePosicion
        

        FROM listado AS a
        JOIN sufix AS b
        ON a.idSufix = b.idSufix
        JOIN parte AS c
        ON a.idParte = c.idParte
        LEFT JOIN grupo AS d
        ON a.idGrupo = d.idGrupo
        JOIN material AS f
        ON c.idMaterial = f.idMaterial
        JOIN estacion AS g
        ON a.idEstacion = g.idEstacion
        JOIN lateralidad AS h
        ON g.idLateralidad = h.idLateralidad
        JOIN modelo AS i
        ON b.idModelo = i.idModelo
        LEFT JOIN caja AS j
        ON a.idCaja = j.idCaja
        LEFT JOIN posicioncaja AS k
        ON j.idPosicionCaja = k.idPosicionCaja
        ");

        $stament->bindParam(":idListado", $idListado);
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


    public function show($idListado)
    {
        $stament = $this->PDO->prepare("SELECT 
        a.idListado, 
        f.nombreMaterial,
        b.nombreSufix, 
        i.nombreModelo, 
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        k.nombrePosicion
        

        FROM listado AS a
        JOIN sufix AS b
        ON a.idSufix = b.idSufix
        JOIN parte AS c
        ON a.idParte = c.idParte
        LEFT JOIN grupo AS d
        ON a.idGrupo = d.idGrupo
        JOIN material AS f
        ON c.idMaterial = f.idMaterial
        JOIN estacion AS g
        ON a.idEstacion = g.idEstacion
        JOIN lateralidad AS h
        ON g.idLateralidad = h.idLateralidad
        JOIN modelo AS i
        ON b.idModelo = i.idModelo
        LEFT JOIN caja AS j
        ON a.idCaja = j.idCaja
        LEFT JOIN posicioncaja AS k
        ON j.idPosicionCaja = k.idPosicionCaja
        WHERE a.idListado = :idListado
        ");
        $stament->bindParam(":idListado", $idListado);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }


    public function update($idEstanteria, $idParte)
    {
        $stament = $this->PDO->prepare("UPDATE estanteria SET idEstanteria = :idEstanteria , idParte = :idParte , idEstado = '1' , updateAt = CURRENT_TIMESTAMP WHERE idEstanteria =:idEstanteria");
        $stament->bindParam(":idEstanteria", $idEstanteria);
        $stament->bindParam(":idParte", $idParte);
        return ($stament->execute()) ? $idEstanteria : false;
    }

    public function delete($idListado)
    {
        $stament = $this->PDO->prepare("DELETE FROM listado WHERE idListado = :idListado");
        $stament->bindParam(":idListado", $idListado);
        return ($stament->execute()) ? true : false;
    }
    public function showParte()
    {
        $stament = $this->PDO->prepare("SELECT idParte, numeroParte, nombreParte 
        FROM parte
        ORDER BY numeroParte ASC");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getLateralidad()
    {
        $stament = $this->PDO->query("SELECT idLateralidad, nombreLateralidad FROM lateralidad");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getSufix()
    {
        $stament = $this->PDO->query("SELECT idSufix, nombreSufix FROM sufix");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
