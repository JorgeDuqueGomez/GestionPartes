<?php

    class lateralidadModel{
        private $PDO;
        public function __construct()
    {
          
        require_once("c:/wamp64/www/HINO/config/conexion.php");
        
            $con = new db();
            $this->PDO = $con->conexion();
    }
        public function insertar($nombre){
            $stament = $this->PDO->prepare("INSERT INTO lateralidad VALUES(NULL, :nombreLateralidad, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $stament->bindParam(":nombreLateralidad",$nombre);
            return($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($idLateralidad){
            $stament = $this->PDO->prepare("SELECT * FROM lateralidad WHERE idLateralidad = :idLateralidad");
            $stament ->bindParam(":idLateralidad",$idLateralidad);
            return($stament->execute()) ? $stament->fetch() : false;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM lateralidad");
            return($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($idLateralidad,$nombre){
            $stament = $this->PDO->prepare("UPDATE lateralidad SET nombreLateralidad= :nombre WHERE idLateralidad =:idLateralidad");
            $stament->bindParam(":idLateralidad",$idLateralidad);
            $stament->bindParam(":nombre",$nombre);
            return ($stament->execute()) ? $idLateralidad : false;
        }

        public function delete($idLateralidad){
            $stament = $this->PDO->prepare("DELETE FROM lateralidad WHERE idLateralidad = :idLateralidad");
            $stament->bindParam(":idLateralidad", $idLateralidad);
            return ($stament->execute()) ? true : false;
        }
    }
