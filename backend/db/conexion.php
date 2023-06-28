<?php
    namespace Db;

    class Conexion
    {
        private $pdo;
        private $host;
        private $dbname;
        private $user;
        private $password;
        public function __construct($host, $dbname, $user, $password){
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf-8mb4";

            $options = [
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_ERRMODE => ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => true,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ];

            try {
                $this->pdo = new PDO($dsn, $user, $password);
                echo "Conexión exitosa";
            } catch (PDOException $e) {
                echo "Ha ocurrido un error: " . $e->getMessage();
            }
        }
    }

?>