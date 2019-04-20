<!-- Licón Gil Fernanda
18 de Abril del 2019 -->

<?php
require_once 'config/db.php';
    class Alumno {
        private $expediente, $CURP, $nombre, $apellidoMaterno, $apellidoPaterno, $sexo, $voto, $tipoUsuario;
        //conexion base de datos
        private  $db;

        function __construct() {
            $this->db = Database::connect();
        
        }

        function getVoto() {
            return $this->voto;

        }

        public function getAll() {
            $listaAlumnos = [];
            $db = Db::getConnect();
            $sql = $db->query('SELECT * FROM alumnos');

            foreach($sql->fetchAll() as $alumno) {
                $listaAlumnos = new Alumno($alumno['CURP'], $alumno['nombre'], $alumno['apellidoMaterno'], $alumno['apellidoPaterno'], $alumno['sexo'], $alumno['voto'], $tipoUsuario['tipoUsuario']);

            }
            return $listaAlumnos;
        }

        public function login($CURP, $expediente) {
            $result = false;
            $sql = "SELECT * FROM alumnos WHERE expediente = '$expediente'";
            $login = $this->db->query($sql);

            if($login && $login->num_rows == 1) {
                $alumno = $login->fetch_object();

                //Verificar la CURP
                if($alumno->CURP == $CURP) {
                    $result = $alumno;
                }
                else {
                    $result = false;
                }
                return $result;

            }

        }
//Pasar tambien id de candidata
        public function saveVote($CURP) {
            $result = false;
            $sql = "UPDATE alumnos SET voto = 1 WHERE CURP = " . $CURP. ";";
            $vote = $this->db->query($sql);

            if($save) {
                $result = true;
            } return $result;
    
            //hacer consulta para agregar el voto a la candidata

        }

    }
?>