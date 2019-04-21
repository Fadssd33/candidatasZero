<?php 
    require_once 'config/db.php';
    Class Candidata {
        public $candidataID, $Nombre, $ApellidoMaterno, $ApellidoPaterno, $Correo, $CarreraID, $Sexo, $Edad, $numVotos, $imagen, $descripcion, $NombreCarrera;
        
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

        function guardar() {
            $sql = "INSERT INTO candidatas VALUES (NULL, '{$this->Nombre}', '{$this->ApellidoMaterno}','{$this->ApellidoPaterno}', '{$this->Correo}',{$this->CarreraID}, {$this->Sexo}, {$this->Edad},0,'{$this->imagen}','{$this->descripcion}');";
            $save = $this->db->query($sql);
            // $this->db-error;
            // die();

            $result = false;
            if($save) {
                $result = true;

            }
            return $result;

        }

     
    }
?>