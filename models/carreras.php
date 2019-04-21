<?php
    require_once 'config/db.php';

    class Carrera {
        private $CarreraID, $NombreCarrera;
        private $db;

        public function __construct() {
            $this->db = Database::connect();
        }

        function getAll() {
            $carreras = $this->db->query("SELECT * FROM carreras ORDER BY CarreraID");
            return $carreras;

        }
    }
?>