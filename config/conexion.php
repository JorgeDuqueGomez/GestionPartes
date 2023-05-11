<?php


class db{
    private $host = "localhost";
    private $dbname = "hino";
    private $username = "root";
    private $password = "";
    
    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            return $PDO;
        } catch(PDOException $e) {
            echo "Error al conectarse a la base de datos" . $e->getMessage();

        }
    }
}
?>