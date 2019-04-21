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
                var_dump($_POST);
              }
            }
    
        
        
    }
?>