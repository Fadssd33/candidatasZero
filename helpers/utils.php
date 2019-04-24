<?php
    class Utils {
        //Recive una sesion y la elimina
        public static function deleteSession($name) {
            if(isset($_SESSION[$name])) {
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);

            }
            // return $name;
        }
        //Regresa todas las carreras de la base de datos.
        public static function showCarreras() {
            require_once 'models/carreras.php';
            $carrera = new Carrera();
            $carreras = $carrera->getAll();
            return $carreras; 
        }

        //verifica si se inicia sesion de administrador
        public static function isAdmin(){
            if(!isset($_SESSION['admin'])){
                header("Location:".base_url);
            }else{
                return true;
            }
        }
        /**
         *toma un string en mayusculas  y lo transforma a minusculas, menos la primera palabra
         */
        public static function formatText($text) {
            $formatedText = ucfirst(strtolower($text));
            return $formatedText;

        }
        
    }
?>  