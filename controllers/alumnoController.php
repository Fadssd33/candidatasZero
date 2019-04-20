<?php
    require_once 'models/alumnos.php';
    class AlumnoController {
        
        public function __construct(){}
        
        public function index() {
            require_once 'views/login.php';
        }

        public function login () {
            

            if(isset($_POST)) {
                //identificar alumno
                $alumno = new Alumno();
               $identity = $alumno->login($_POST['CURP'], $_POST['expediente']);
               
               if($identity && is_object($identity)) {
                    $_SESSION['identity'] = $identity;
                    if($identity->tipoUsuario == 'admin') {
                        $_SESSION['admin'] = true;
     
                    }
                    header("location:". base_url);
               }
               
               
               else {
                   $_SESSION['error_login'] = 'Identificacion fallida';
                   $contraCorrecta = false;
                   header("location:". base_url . "alumno/index");
                   
               }
               die();
                
            }
            //redireccionar
            header("location:". base_url);
        }

        public function logout() {
            if(isset($_SESSION['identity'])) {
                unset($_SESSION['identity']);
            }
                
            if(isset($_SESSION['admin'])) {
                unset($_SESSION['admin']);
            }
            header("location:" .base_url);

        }

        public function saveVote() {
            if (isset($_POST)) {
                $alumno = new Alumno();
               $save =  $alumno->saveVote($_POST['CURP']);
                //agregar el id de candidata
                if($save) {
                    //Poner una pantalla o modal de voto echo correctamente
                }
                else {
                    //Poner errror base de datos
                }
                
            }
        }
    }
?>