<?php 
    require_once 'config/db.php';
    Class Candidata {
        private $candidataID, $Nombre, $ApellidoMaterno, $ApellidoPaterno, $Correo, $Sexo, $Edad, $numVotos, $imagen, $descripcion;
        
        private $db;

        function __construct() {
            $this->db = Database::connect();

        }

        function getCandidatas() {
            $candidatas = $this->db->query("SELECT * FROM candidatas");
            return $candidatas;

        }

        function getCarrera() {
            $candidataCarrera = $this->db->query("SELECT Nombre from carreras WHERE CarreraID IN (SELECT CarreraID FROM candidatas)");
            return $candidataCarrera;
        }

    }
?>