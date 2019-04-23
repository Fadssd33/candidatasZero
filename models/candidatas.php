<?php 
    require_once 'config/db.php';
    Class Candidata {
        public $candidataID, $Nombre, $ApellidoMaterno, $ApellidoPaterno, $Correo, $CarreraID, $Sexo, $Edad, $numVotos, $imagen, $descripcion, $NombreCarrera;
        
        private $db;

        function __construct() {
            $this->db = Database::connect();

        }

        function getCandidatas() {
            $candidatas = $this->db->query("SELECT CandidataID, Nombre, ApellidoMaterno, ApellidoPaterno, Correo, candidatas.CarreraID, Sexo, Edad, numVotos, imagen, descripcion, NombreCarrera  FROM candidatas INNER JOIN carreras ON carreras.CarreraID =  candidatas.CarreraID");
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

        function getById($candidataID) {
            $sql = 'SELECT * FROM candidatas WHERE CandidataID = ' . $candidataID . ";";
            $candidata = $this->db->query($sql);
            return $candidata;
        
        }

        function delete($candidataID) {
          $sql = "DELETE FROM candidatas WHERE CandidataID = {$candidataID}";
          $delete = $this->db->query($sql);
          $result = false;
            if($delete) {
                $result = true;

            }
            return $result;  

        }

        function update($candidataID,$Nombre,$ApellidoMaterno, $ApellidoPaterno, $Correo, $CarreraID, $Edad, $descripcion) {
        $sql= "UPDATE candidatas SET Nombre = '{$Nombre}', ApellidoMaterno = '{$ApellidoMaterno}', ApellidoPaterno = '{$ApellidoPaterno}', Correo = '{$Correo}', CarreraID = {$CarreraID}, Edad = {$Edad}, descripcion = '{$descripcion}' WHERE CandidataID = {$candidataID}";
        $update = $this->db->query($sql);
        $result = false;
        if($update) {
            $result = true;

        }
        return $result;

        }

     
    }
?>