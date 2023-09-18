<?php

class tpmModel
{
    private $PDO;
    public function __construct()
    {

        require_once(__DIR__ . "/../config/conexion.php");

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
    public function trash()
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
        a.idEstado,
        a.updateAt

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
        b.idSufix,
        b.nombreSufix, 
        f.idMaterial,
        f.nombreMaterial,
        i.nombreModelo, 
        c.idParte,
        c.nombreParte, 
        c.numeroParte, 
        d.codigo, 
        a.componentCode, 
        a.cantidad, 
        g.nombreEstacion, 
        h.nombreCorto, 
        j.nombreCaja,
        a.numeroCaja,
        k.idLinea,
        k.nombreLinea,
        h.nombreLateralidad,
        l.lote

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
        LEFT JOIN lote AS l
        ON b.idSufix = l.idSufix


        WHERE a.idListado IN ($ids)");

        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    public function insertar(

        $idListado,
        $idSufix ,
        $nombreSufix,
        $loteAnterior,
        $loteEfectividad,
        $nombreEstacionAnterior,
        $nombreEstacionNueva,
        $nombreLateralidadAnterior,
        $nombreLateralidadNueva,
        $idParteAnterior,
        $idParteNueva,
        $grupoAnterior,
        $grupoNuevo,
        $componentAnterior,
        $componentNuevo,
        $cantidadAnterior,
        $cantidadNueva,
        $numeroCajaAnterior,
        $numeroCajaNueva,
        $nombreCajaAnterior,
        $nombreCajaNueva
    ) {
        $idListado= empty($idListado) ? null : $idListado;
        $idSufix = empty($idSufix) ? null : $idSufix;
        $nombreSufix= empty($nombreSufix) ? null : $nombreSufix;
        $loteAnterior= empty($loteAnterior) ? null : $loteAnterior;
        $loteEfectividad= empty($loteEfectividad) ? null : $loteEfectividad;
        $nombreEstacionAnterior= empty($nombreEstacionAnterior) ? null : $nombreEstacionAnterior;
        $nombreEstacionNueva= empty($nombreEstacionNueva) ? null : $nombreEstacionNueva;
        $nombreLateralidadAnterior= empty($nombreLateralidadAnterior) ? null : $nombreLateralidadAnterior;
        $nombreLateralidadNueva= empty($nombreLateralidadNueva) ? null : $nombreLateralidadNueva;
        $idParteAnterior= empty($idParteAnterior) ? null : $idParteAnterior;
        $idParteNueva= empty($idParteNueva) ? null : $idParteNueva;
        $grupoAnterior= empty($grupoAnterior) ? null : $grupoAnterior;
        $grupoNuevo= empty($grupoNuevo) ? null : $grupoNuevo;
        $componentAnterior= empty($componentAnterior) ? null : $componentAnterior;
        $componentNuevo= empty($componentNuevo) ? null : $componentNuevo;
        $cantidadAnterior= empty($cantidadAnterior) ? null : $cantidadAnterior;
        $cantidadNueva= empty($cantidadNueva) ? null : $cantidadNueva;
        $numeroCajaAnterior= empty($numeroCajaAnterior) ? null : $numeroCajaAnterior;
        $numeroCajaNueva= empty($numeroCajaNueva) ? null : $numeroCajaNueva;
        $nombreCajaAnterior= empty($nombreCajaAnterior) ? null : $nombreCajaAnterior;
        $nombreCajaNueva= empty($nombreCajaNueva) ? null : $nombreCajaNueva;

        $stament = $this->PDO->prepare(
            "INSERT INTO tpmlog VALUES(
            NULL, 
            :idListado,
            :idSufix, 
            :nombreSufix, 
            :loteAnterior, 
            :loteEfectividad, 
            :nombreEstacionAnterior, 
            :nombreEstacionNueva, 
            :nombreLateralidadAnterior, 
            :nombreLateralidadNueva, 
            :idParteAnterior,
            :idParteNueva,
            :grupoAnterior,
            :grupoNuevo,
            :componentAnterior,
            :componentNuevo,
            :cantidadAnterior,
            :cantidadNueva,
            :numeroCajaAnterior,
            :numeroCajaNueva,
            :nombreCajaAnterior,
            :nombreCajaNueva,
            'Jorge Duque', 
            CURRENT_TIMESTAMP           
            )");
       
        $stament->bindParam(":idListado", $idListado);
        $stament->bindParam(":idSufix", $idSufix);
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":loteAnterior", $loteAnterior);
        $stament->bindParam(":loteEfectividad", $loteEfectividad);
        $stament->bindParam(":nombreEstacionAnterior", $nombreEstacionAnterior);
        $stament->bindParam(":nombreEstacionNueva", $nombreEstacionNueva);
        $stament->bindParam(":nombreLateralidadAnterior", $nombreLateralidadAnterior);
        $stament->bindParam(":nombreLateralidadNueva", $nombreLateralidadNueva);
        $stament->bindParam(":idParteAnterior", $idParteAnterior);
        $stament->bindParam(":idParteNueva", $idParteNueva);
        $stament->bindParam(":grupoAnterior", $grupoAnterior);
        $stament->bindParam(":grupoNuevo", $grupoNuevo);
        $stament->bindParam(":componentAnterior", $componentAnterior);
        $stament->bindParam(":componentNuevo", $componentNuevo);
        $stament->bindParam(":cantidadAnterior", $cantidadAnterior);
        $stament->bindParam(":cantidadNueva", $cantidadNueva);
        $stament->bindParam(":numeroCajaAnterior", $numeroCajaAnterior);
        $stament->bindParam(":numeroCajaNueva", $numeroCajaNueva);
        $stament->bindParam(":nombreCajaAnterior", $nombreCajaAnterior);
        $stament->bindParam(":nombreCajaNueva", $nombreCajaNueva);
        return $stament->execute();
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
    public function update(

        $idListado,
        $idEstacion,
        $idLateralidad,
        $numeroCaja,
        $idCaja,
        $idGrupo,
        $componentCode,
        $cantidad,
        $nombreModeloCopy,
        $nombreSufixCopy,
        $loteCopy,
        $nombreEstacionCopy,
        $nombreLateralidadCopy,
        $nombreMaterialCopy,
        $nombreParteCopy,
        $numeroParteCopy,
        $codigoCopy,
        $componentCodeCopy,
        $cantidadCopy,
        $numeroCajaCopy,
        $nombreCajaCopy
    ) {
        $stament = $this->PDO->prepare(
            "INSERT INTO listadolog
            VALUES (
                NULL,
                :nombreModelo, 
                :nombreSufix, 
                :lote, 
                :nombreEstacion,
                :nombreLateralidad,
                :nombreMaterial,
                :nombreParte,
                :numeroParte,
                :codigo,
                :componentCodeCopy,
                :cantidadCopy,
                :numeroCajaCopy,
                :nombreCajaCopy,
                CURRENT_TIMESTAMP)"
        );
        $stament->bindParam(":nombreModelo", $nombreModeloCopy);
        $stament->bindParam(":nombreSufix", $nombreSufixCopy);
        $stament->bindParam(":lote", $loteCopy);
        $stament->bindParam(":nombreEstacion", $nombreEstacionCopy);
        $stament->bindParam(":nombreLateralidad", $nombreLateralidadCopy);
        $stament->bindParam(":nombreMaterial", $nombreMaterialCopy);
        $stament->bindParam(":nombreParte", $nombreParteCopy);
        $stament->bindParam(":numeroParte", $numeroParteCopy);
        $stament->bindParam(":codigo", $codigoCopy);
        $stament->bindParam(":componentCodeCopy", $componentCodeCopy);
        $stament->bindParam(":cantidadCopy", $cantidadCopy);
        $stament->bindParam(":numeroCajaCopy", $numeroCajaCopy);
        $stament->bindParam(":nombreCajaCopy", $nombreCajaCopy);

        $stament->execute();

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
                WHERE idListado = :idListado"
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
    public function validationEstacion()
    {
        $stament = $this->PDO->query(
            "SELECT DISTINCT 

        a.idLinea,
        b.nombreLinea,
        a.idEstacion,
        a.nombreEstacion

        FROM estacion AS a
        JOIN linea AS b
        ON a.idLinea = b.idLinea
        "
        );
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
    public function getMaterial()
    {
        $stament = $this->PDO->query("SELECT idMaterial, nombreMaterial FROM material");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getParte()
    {
        $stament = $this->PDO->query("SELECT a.idParte, a.nombreParte, a.numeroParte, a.idMaterial, b.nombreMaterial 
        FROM parte AS a
        JOIN material AS b
        ON a.idMaterial = b.idMaterial
        ORDER BY a.numeroParte ASC
        ");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCaja()
    {
        $stament = $this->PDO->query("SELECT idCaja, nombreCaja
        FROM caja ");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listadoLog()
    {
        $stament = $this->PDO->prepare("SELECT 

        idCambios,
        nombreModelo, 
        nombreSufix, 
        lote,
        nombreEstacion, 
        nombreLateralidad,
        nombreMaterial,
        nombreParte, 
        numeroParte,
        codigo,
        componentCode, 
        cantidad,
        numeroCaja,
        nombreCaja,
        updateAt

        FROM listadolog
        ORDER BY idCambios DESC
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function tpmLog()
    {
        $stament = $this->PDO->prepare("SELECT
            a.idTpm,
            a.idListado,
            a.idSufix, 
            a.nombreSufix, 
            a.loteAnterior, 
            a.loteEfectividad, 
            a.nombreEstacionAnterior, 
            a.nombreEstacionNueva, 
            a.nombreLateralidadAnterior, 
            a.nombreLateralidadNueva, 
            a.idParteAnterior,
            b.nombreParte AS nombreParteA,
            b.numeroParte AS numeroParteA,
            b.idMaterial,
            MtlNuevo.nombreMaterial AS nombreMaterialA,

            a.idPartenueva,
            c.nombreParte AS nombreParteN,
            c.numeroParte AS numeroParteN,
            c.idMaterial,
            MtlAntiguo.nombreMaterial AS nombreMaterialN,

            a.grupoAnterior,
            a.grupoNuevo,
            a.componentAnterior,
            a.componentNuevo,
            a.cantidadAnterior,
            a.cantidadNueva,
            a.numeroCajaAnterior,
            a.numeroCajaNueva,
            a.nombreCajaAnterior,
            a.nombreCajaNueva,
            a.usuario,
            a.createdAt,
            f.nombreModelo
        
        FROM tpmlog AS a
        JOIN parte AS b
        ON a.idParteAnterior = b.idParte
        JOIN parte AS c
        ON a.idParteNueva = c.idParte

        JOIN material AS MtlNuevo
        ON MtlNuevo.idMaterial = b.idMaterial

        JOIN material AS MtlAntiguo
        ON MtlAntiguo.idMaterial = c.idMaterial

        JOIN sufix AS e
        ON a.idSufix = e.idSufix
        JOIN modelo AS f
        ON e.idModelo = f.idModelo
        
        ORDER BY a.createdAt DESC
        ");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
    
}
