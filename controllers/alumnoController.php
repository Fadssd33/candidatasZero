<?php
    require_once 'models/alumnos.php';
    require_once 'models/candidatas.php';
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
               $saveAlumnoVote =  $alumno->saveVote($_SESSION['identity']->CURP);
               
               $candidata = new Candidata();
               $saveCandidataVote = $candidata->registerVote($_POST['candidataID']);
               
                //agregar el id de candidata
                if($saveAlumnoVote && $saveCandidataVote) {
                    $_SESSION['votoCompletado'] = 'complete';
                }
                else {
                    //Poner errror base de datos
                    $_SESSION['votoCompletado'] = 'failed';

                }
                
            }
            header('location:' . base_url . "candidata/index");
        }

        // public function confirmarVoto() {
        //     $candidata = new Candidata();
        //     $candidataData = $candidata->getById($_POST['']);
        //     require_once 'views/confirmarVoto.php';
            


            
            
        // }
    }
?>