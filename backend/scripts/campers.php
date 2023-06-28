<?php

    namespace Scripts;
    use Db\Conexion;

    class Campers extends Conexion
    {
        private $conexion;
        private $idCamper;
        public $nombreCamper;
        public $apellidoCamper;
        private $fechaNac;
        private $idReg;
        public function __construct($idCamper, $nombreCamper, $apellidoCamper, $fechaNac, $idReg){
            $this->nombreCamper = $nombreCamper;
            $this->apellidoCamper = $apellidoCamper;
            $this->fechaNac = $fechaNac;
            $this->idReg = $idReg;

            try {
                $this->conexion = new Conexion("localhost", "campuslands", "campus", "campus2023");
            } catch (PDOException $e) {
                echo "Ocurrió un error";
            }
        }
        public function insertCampers(){
            $query = "INSERT INTO campers (nombreCamper, apellidoCamper, fechaNac, idReg) VALUES ($nombreCamper, $apellidoCamper, $fechaNac, $idReg)";

            /* $result = $this->pdo->prepare */
        }
    }






?>