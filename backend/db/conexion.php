<?php
    namespace Db;
    class Conexion
    {
        private $conn;
        protected static $settings = Array(
                "host" => "localhost",
                "username" => "campus",
                "password" => "campus2023",
                "dbname" => "campuslands",
                "options" => [
                    PDO::ATTR_PERSISTENT => false,
                    PDO::ATTR_ERRMODE => ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => true,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
                ]
        );
        public function __construct($args = []){    
            $this->conn = $args['conn'] ?? null;
        }
        public function getConnection(){
            $dbConfig = self::$settings;
            $this->conn = null;

            $dsn = "mysql:host={$dbConfig['host']};dbname:{$dbConfig['dbname']};";

            try {
                $this->conn = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options']);
                echo "Conexión exitosa";
            } catch (PDOException $e) {
                echo "Ocurrió un error: " . $e->getMessage();
            }
            return $this->conn;
        }
    }
?>