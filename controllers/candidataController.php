<?php 
    require_once 'models/candidatas.php';
    class CandidataController {

          public function __construct(){}
        
            public function index() {
                
                require_once 'views/index.php';
               
            }

            function listadoCandidatas() {
                $candidata = new Candidata();
               $candidatas = $candidata->getCandidatas();
              require_once 'views/listadoCandidatas.php';

              
                
            }
    
        
        
    }
?>