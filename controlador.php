<?php

    class BASEDATOS{
        private $conet;
        private $User;
        private $Pass;
        public function __construct($conexion, $User,$Pass)
        {
            $this->conet = $conexion;
            $this->User = $User;
            $this->Pass = $Pass;
        }

        public function Comprobar(){
            $sql = "SELECT * FROM credenciales WHERE NomUsu='$this->User' and Pass='$this->Pass' ";
            $stm = $this->conet->prepare($sql);
            $stm->execute();

            $table = $stm->fetchAll();
            
            if(count($table) == 0){
                echo "Incorrecto";
            }else{
                echo "Correcto";
            }
        }

    }

?>