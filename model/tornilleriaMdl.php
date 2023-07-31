<?php

class tornilleriaModel
{
    private $PDO;
    public function __construct()
    {

        require_once(__DIR__ . "/../config/conexion.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function created($nombreSufix, $lote, $nombreLinea)
    {
        $stament = $this->PDO->prepare(

            "INSERT INTO tornillerialog
        SELECT 		
                         null,
                        g.idSufix,
                        g.nombreSufix,
                        :lote,
                        f.nombreLinea, 
                        e.nombreEstacion, 
                        e.ordenEstacion,
                        h.nombreCorto,
                        c.orden,
                        c.modulo,
                        c.posicion,
                        b.numeroParte, 
                        b.nombreParte, 
                        SUM(a.cantidad), 
                        a.numeroCaja,
                        d.nombreCaja,
                        'usercreate',
                        CURRENT_TIMESTAMP,
                        'user_update',
                        CURRENT_TIMESTAMP,
                        'PENDIENTE'
        
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
                JOIN lote AS i
                ON g.idSufix = i.idSufix
        
                WHERE g.nombreSufix = :nombreSufix
                AND   f.nombreLinea = :nombreLinea
                AND b.idMaterial = '1'
                GROUP BY b.numeroParte, a.numeroCaja, d.nombreCaja, e.nombreEstacion, h.nombreCorto
                "
        );
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":nombreLinea", $nombreLinea);
        $stament->bindParam(":lote", $lote);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function iniciarAlistamiento($nombreSufix, $lote, $nombreLinea)
    {
        $stament = $this->PDO->prepare(
            "SELECT 
            idAlistamientoPC,
            idSufix,
            nombreSufix ,
            lote ,
            nombreLinea ,
            nombreEstacion ,
            ordenEstacion ,
            nombreLateralidad ,
            ordenAlistamiento ,
            modulo ,
            posicion ,
            numeroParte ,
            nombreParte , 
            cantidad ,
            numeroCaja ,
            nombreCaja ,
            userCreated ,
            createdAt ,
            userUpdate ,
            updateAt,
            checkList
            
        FROM tornillerialog
        WHERE nombreSufix = :nombreSufix
        AND lote = :lote
        AND nombreLinea = :nombreLinea
        "
        );
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":lote", $lote);
        $stament->bindParam(":nombreLinea", $nombreLinea);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function consultarAlistamiento($nombreSufix, $lote, $nombreLinea)
    {
        $stament = $this->PDO->prepare(
            "SELECT *
        FROM tornillerialog
        WHERE nombreSufix = :nombreSufix
        AND lote = :lote
        AND nombreLinea = :nombreLinea
        "
        );
        $stament->bindParam(":nombreSufix", $nombreSufix);
        $stament->bindParam(":lote", $lote);
        $stament->bindParam(":nombreLinea", $nombreLinea);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }



    public function update($idAlistamientoPC, $idSufix, $nombreSufix, $lote)
    {
        $stament = $this->PDO->prepare(
            "UPDATE tornillerialog
            SET checkList = 'ALISTADO', 
                updateAt = CURRENT_TIMESTAMP
            WHERE idAlistamientoPC = :idAlistamientoPC"
        );
        $stament->bindParam(":idAlistamientoPC", $idAlistamientoPC);
    
        if ($stament->execute()) {
            $statement2 = $this->PDO->prepare(
                "SELECT nombreSufix, lote, nombreLinea, checkList
                FROM tornillerialog 
                WHERE nombreSufix = :nombreSufix
                AND lote = :lote 
                AND checkList = 'PENDIENTE'"
            );
            $statement2->bindParam(":nombreSufix", $nombreSufix);
            $statement2->bindParam(":lote", $lote);
            $statement2->execute();

            if ($statement2->rowCount() == 0) {
                $updateStatement = $this->PDO->prepare(
                    "UPDATE lote
                    SET lote = :lote, 
                        updateAt = CURRENT_TIMESTAMP
                    WHERE idSufix = :idSufix"
                );
                $updateStatement->bindParam(":lote", $lote);
                $updateStatement->bindParam(":idSufix", $idSufix);
                $updateStatement->execute();
            }
        } else {
            return false;
        }
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
        $stament = $this->PDO->query("SELECT DISTINCT lote, nombreSufix FROM tornillerialog");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLote2()
    {
        $stament = $this->PDO->query("SELECT DISTINCT lote, nombreSufix, nombreLinea FROM tornillerialog");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getEstacion()
    {
        $stament = $this->PDO->query("SELECT * FROM estacion");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
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
        g.nombreSufix,
        h.nombreCorto,
        h.nombreLateralidad,
        i.lote

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
        JOIN lote AS i
        ON g.idSufix = i.idSufix

        WHERE b.idMaterial = '1'";

        // Construir la consulta dependiendo de los valores seleccionados
        if ($idSufix) {
            $query .= " AND a.idSufix = :idSufix";
        }
        if ($idLinea) {
            $query .= " AND f.idLinea = :idLinea";
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
    public function insertar(
        $nombreSufix,
        $lote,
        $linea,
        $estacion,
        $lateralidad,
        $ubicacion,
        $numeroParte,
        $nombreParte,
        $cantidad,
        $numeroCaja
    ) {
        try {
            $stament = $this->PDO->prepare(
                "INSERT INTO tornillerialog 
                VALUES(NULL, :nombreSufix, :lote, :linea, :estacion, :lateralidad, :ubicacion, :numeroParte, :nombreParte, :cantidad, :numeroCaja, CURRENT_TIMESTAMP)"
            );
            $stament->bindParam(":nombreSufix", $nombreSufix);
            $stament->bindParam(":lote", $lote);
            $stament->bindParam(":linea", $linea);
            $stament->bindParam(":estacion", $estacion);
            $stament->bindParam(":lateralidad", $lateralidad);
            $stament->bindParam(":ubicacion", $ubicacion);
            $stament->bindParam(":numeroParte", $numeroParte);
            $stament->bindParam(":nombreParte", $nombreParte);
            $stament->bindParam(":cantidad", $cantidad);
            $stament->bindParam(":numeroCaja", $numeroCaja);
            $stament->execute();

            return true; // Retorna true si la inserción fue exitosa
        } catch (Exception $e) {
            // Si ocurre algún error, puedes manejarlo de la manera que desees
            // Por ejemplo, puedes mostrar un mensaje de error o guardar el error en un archivo de registro.
            die($e->getMessage());
            return false;
        }
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

    public function delete($idSerie)
    {
        $stament = $this->PDO->prepare("DELETE FROM serie WHERE idSerie = :idSerie");
        $stament->bindParam(":idSerie", $idSerie);
        return ($stament->execute()) ? true : false;
    }
}
