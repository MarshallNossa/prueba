<?php
    namespace Scripts;

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
                $this->conexion = new Conexion();
            } catch (PDOException $e) {
                echo "Ocurrió un error";
            }
        }
        public function insertCampers(){          
            if (isset($_POST['Guardar'])) {

                $nombreCamper = $_POST['nombreCamper'];
                $apellidoCamper = $_POST['apellidoCamper'];
                $fechaNac = $_POST['fechaNac'];
                $idReg = $_POST['idReg'];

                $query = "INSERT INTO campers (nombreCamper, apellidoCamper, fechaNac, idReg) VALUES ($nombreCamper, $apellidoCamper, $fechaNac, $idReg)";
                $result = $this->conexion->prepare($query);
                $result->execute();
            }
        }
        public function getCampers($nombreCamper, $apellidoCamper, $fechaNac, $idReg){
            $query = "SELECT * FROM campers";
            $result = $this->conexion->prepare($query);
            $result->execute();
        }
    }
?>