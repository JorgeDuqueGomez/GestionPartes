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
        a.idEstacion,
        a.idLateralidad,
        a.idGrupo,
        a.idCaja,
        b.nombreSufix, 
        f.nombreMaterial,
        i.nombreModelo, 
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        a.numeroCaja,
        a.idEstado

        

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
        ON a.idLateralidad = h.idLateralidad
        JOIN modelo AS i
        ON b.idModelo = i.idModelo
        LEFT JOIN caja AS j
        ON a.idCaja = j.idCaja
        JOIN estado AS k
        ON a.idEstado = k.idEstado

        WHERE a.idEstado = '1'
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function historic()
    {
        $stament = $this->PDO->prepare("SELECT 
        a.idListado, 
        a.idEstacion,
        a.idLateralidad,
        a.idGrupo,
        a.idCaja,
        b.nombreSufix, 
        f.nombreMaterial,
        i.nombreModelo, 
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        a.numeroCaja,
        a.idEstado

        

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
        ON a.idLateralidad = h.idLateralidad
        JOIN modelo AS i
        ON b.idModelo = i.idModelo
        LEFT JOIN caja AS j
        ON a.idCaja = j.idCaja
        JOIN estado AS k
        ON a.idEstado = k.idEstado

        WHERE a.idEstado = '2'
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    public function getSelectedRows($selectedIds)
    {
        $ids = implode(",", $selectedIds);

        $statement = $this->PDO->prepare("SELECT 
        a.idListado, 
        a.idEstacion,
        a.idLateralidad,
        a.idGrupo,
        a.idCaja,
        b.nombreSufix, 
        f.nombreMaterial,
        i.nombreModelo, 
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        a.numeroCaja,
        k.nombreLinea,
        h.nombreLateralidad

        

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
        ON a.idLateralidad = h.idLateralidad
        JOIN modelo AS i
        ON b.idModelo = i.idModelo
        LEFT JOIN caja AS j
        ON a.idCaja = j.idCaja
        JOIN linea AS k
        ON g.idLinea = k.idLinea


        WHERE a.idListado IN ($ids)");

        return ($statement->execute()) ? $statement->fetchAll() : false;
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
    public function update($idListado, $idEstacion, $idLateralidad, $numeroCaja, $idCaja, $idGrupo, $componentCode, $cantidad)
    {
        $stament = $this->PDO->prepare(
            "UPDATE listado SET 
                idEstacion = :idEstacion,
                idLateralidad = :idLateralidad,
                numeroCaja = :numeroCaja,
                idCaja = :idCaja,
                idGrupo = :idGrupo,
                componentCode = :componentCode,
                cantidad = :cantidad,

                updateAt = CURRENT_TIMESTAMP
                WHERE idListado = :idListado
        "
        );
        $stament->bindParam(":idListado", $idListado);
        $stament->bindParam(":idEstacion", $idEstacion);
        $stament->bindParam(":idLateralidad", $idLateralidad);
        $stament->bindParam(":numeroCaja", $numeroCaja);
        $stament->bindParam(":idCaja", $idCaja);
        $stament->bindParam(":idGrupo", $idGrupo);
        $stament->bindParam(":componentCode", $componentCode);
        $stament->bindParam(":cantidad", $cantidad);


        return ($stament->execute()) ? $idListado : false;
    }
    public function delete($idListado)
    {
        $stament = $this->PDO->prepare("UPDATE listado SET idEstado = '2' , updateAt = CURRENT_TIMESTAMP WHERE idListado = :idListado");
        $stament->bindParam(":idListado", $idListado);
        return ($stament->execute()) ? true : false;
    }
    public function restore($idListado)
    {
        $stament = $this->PDO->prepare("UPDATE listado SET idEstado = '1' , updateAt = CURRENT_TIMESTAMP WHERE idListado = :idListado");
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
    public function getLinea()
    {
        $stament = $this->PDO->query("SELECT idLinea, nombreLinea FROM linea");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEstacion()
    {
        $stament = $this->PDO->query("SELECT idEstacion, nombreEstacion FROM estacion ORDER BY nombreEstacion ASC");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getGrupo()
    {
        $stament = $this->PDO->query("SELECT idGrupo, nombreGrupo, codigo FROM grupo");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCaja()
    {
        $stament = $this->PDO->query("SELECT idCaja, nombreCaja
        FROM caja 
        
        
        ");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
}
