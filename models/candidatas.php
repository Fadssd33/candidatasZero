<?php 
    require_once 'config/db.php';
    Class Candidata {
        private $candidataID, $Nombre, $ApellidoMaterno, $ApellidoPaterno, $Correo, $Sexo, $Edad, $numVotos, $imagen, $descripcion, $NombreCarrera;
        
        private $db;

        function __construct() {
            $this->db = Database::connect();

        }

        function getCandidatas() {
            $candidatas = $this->db->query("SELECT CandidataID, Nombre, ApellidoMaterno, ApellidoPaterno, Correo, Sexo, Edad, numVotos, imagen, descripcion, NombreCarrera  FROM candidatas INNER JOIN carreras ON carreras.CarreraID =  candidatas.CarreraID");
            return $candidatas;

        }

        function getFirstThree() {
            // $firstThree = $this->db->query("SELECT * FROM candidatas LIMIT 3");
            $firstThree = $this->db->query("SELECT CandidataID, Nombre, ApellidoMaterno, ApellidoPaterno, Correo, Sexo, Edad, numVotos, imagen, descripcion, NombreCarrera  FROM candidatas INNER JOIN carreras ON carreras.CarreraID =  candidatas.CarreraID LIMIT 3");

            return $firstThree;
        }

     
    }
?>