<?php
    namespace Db;
    class Conexion
    {
        private $conn;
        protected static $settings = Array(
                "driver" => "mysql",
                "host" => "localhost",
                "username" => "campus",
                "password" => "campus2023",
                "dbname" => "campuslands",
                "collation" => "utf8mb4_unicode_ci",
                "options" => [
                    \PDO::ATTR_PERSISTENT => false,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_EMULATE_PREPARES => true,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
                ]
        );
        public function __construct($args = []){    
            $this->conn = $args['conn'] ?? null;
        }
        public function getConnection(){
            $dbConfig = self::$settings;
            $this->conn = null;

            $dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname:{$dbConfig['dbname']};";

            try {
                $this->conn = new \PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options']);
                echo "Conexión exitosa";
            } catch (PDOException $e) {
                echo "Ocurrió un error: " . $e->getMessage();
            }
        }
    }
?>