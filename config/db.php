<?php 
    class Database {
        //Prueba
        public static function connect() {
            $db = new mysqli('localhost', 'root', '', 'candidatas');
            $db->query("SET NAMES 'utf8'");
            return $db;
        }
    }
?>