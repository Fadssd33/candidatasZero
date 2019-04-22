<?php 
    require_once 'models/candidatas.php';
    class CandidataController {

          public function __construct(){}
        
            public function index() {
              $candidata = new Candidata();
              $candidatas = $candidata->getFirstThree();
                require_once 'views/index.php';

            }

            public function listadoCandidatas() {
               $candidata = new Candidata();
               $candidatas = $candidata->getCandidatas();
              
              
              require_once 'views/listadoCandidatas.php';

            }

            public function agregarCandidata() {
              Utils::isAdmin();
              require_once 'views/agregarCandidata.php';
              
            }

            public function guardarCandidata() {
              Utils::isAdmin();
              if(isset($_POST)) {
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidoMaterno = isset($_POST['apellidoMaterno']) ? $_POST['apellidoMaterno'] : false;
                $apellidoPaterno = isset($_POST['apellidoPaterno']) ? $_POST['apellidoPaterno'] : false; 
                $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
                $carrera = isset($_POST['carrera']) ? $_POST['carrera'] : false;
                $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : false;
                $edad = isset($_POST['edad']) ? $_POST['edad'] : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

                if($nombre && $apellidoMaterno && $apellidoPaterno && $correo && $carrera && $sexo && $edad && $descripcion) {
                    $candidataGuardar = new Candidata();
                    $candidataGuardar->Nombre = $nombre;
                    $candidataGuardar->ApellidoMaterno = $apellidoMaterno;
                    $candidataGuardar->ApellidoPaterno = $apellidoPaterno;
                    $candidataGuardar->Correo = $correo;
                    $candidataGuardar->CarreraID = $carrera;
                    $candidataGuardar->Sexo = $sexo;
                    $candidataGuardar->Edad = $edad;
                    $candidataGuardar->descripcion = $descripcion;

                   //Guadar foto
                   $file = $_FILES['imagen'];
                   $fileName = $file['name'];
                   $mimetype = $file['type'];

                   if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
                      if(!is_dir('uploads/images')) {
                        mkdir('uploads/images', 0777, true);
                      }
                      $candidataGuardar->imagen = $fileName;
                      
                      
                      move_uploaded_file($file['tmp_name'], 'uploads/images/' . $fileName);
                      
                   }

                   $guardar = $candidataGuardar->guardar();
                   if($guardar) {
                     $_SESSION['candidataGuardada'] = "complete";

                   }
                   else  {
                    $_SESSION['candidataGuardada'] = "failed";

                   }
                } 
                else {
                  $_SESSION['candidataGuardada'] = "Algo no llego correctamente";

                }
              }
              else {
                $_SESSION['candidataGuardada'] = "No llego nada por POST";

              }

              header('Location:' . base_url . 'candidata/agregarCandidata');
            }

            public function eliminarcandidata() {
              Utils::isAdmin();
              $candidata = new Candidata();
               $candidatas = $candidata->getCandidatas();
              require_once 'views/eliminarCandidata.php';
            }
    
        
        
    }
?>