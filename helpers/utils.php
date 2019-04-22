<?php
    class Utils {
        public static function deleteSession($name) {
            if(isset($_SESSION[$name])) {
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);

            }
            // return $name;
        }

        public static function showCarreras() {
            require_once 'models/carreras.php';
            $carrera = new Carrera();
            $carreras = $carrera->getAll();
            return $carreras; 
        }


        public static function isAdmin(){
            if(!isset($_SESSION['admin'])){
                header("Location:".base_url);
            }else{
                return true;
            }
        }
        
    }
?>  