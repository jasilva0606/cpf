<?php
    class Instalacion{
        public $nombre;
        private $tabla;
        private $codigo;
        private $capaRes;
        private $diaMin;
        private $diaMax;

        public function __construct($inst){
            if (strcmp($inst, "pad") == 0) {
                $this->nombre="pad";
                $this->capaRes=4;
                $this->tabla="reservas_pa";
                $this->codigo="canchaspa";
                $this->diaMin=1;
                $this->diaMax=7;
                $this->capaRes=3;
            } else if (strcmp($inst, "ten")== 0){
                $this->nombre=="ten";
                $this->capaRes=4;
                $this->tabla="reservas_te";
                $this->codigo="canchast";
                $this->diaMin=1;
                $this->diaMax=7;
                $this->capaRes=3;
            } else if (strcmp($inst, "golf")== 0) {
                $this->nombre="golf";
                $this->capaRes=4;
                $this->tabla="reservas_golf";
                $this->codigo="grigolf";
                $this->diaMin=1;
                $this->diaMax=7;
                $this->capaRes=2;
            } else if (strcmp($inst, "golfd")== 0) {
                $this->nombre="golfd";
                $this->capaRes=1;
                $this->tabla="reservas_dri";
                $this->codigo="gridriving";
                $this->diaMin=1;
                $this->diaMax=7;
                $this->capaRes=0;
            } else if (strcmp($inst, "sal")== 0) {
                $this->nombre="sal";
                $this->tabla="reservas_sq";
                $this->codigo="salones";
                $this->diaMin=1;
                $this->diaMax=365;
                $this->capaRes=0;
            } else if (strcmp($inst, "qui")== 0) {
                $this->nombre="qui";
                $this->tabla="reservas_sq";
                $this->codigo="salones";
                $this->diaMin=1;
                $this->diaMax=30;
                $this->capaRes=0;
            } else if (strcmp($inst, "gim")== 0) {
                $this->nombre="gim";
                $this->capaRes=2;
                $this->tabla="reservas_gim";
                $this->codigo="turgim";
                $this->diaMin=1;
                $this->diaMax=3;
                $this->capaRes=1;
            }
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getTabla(){
            return $this->tabla;
        }
        public function getCodigo(){
            return $this->codigo;
        }
        public function getCapaRes(){
            return $this->capaRes;
        }
        public function getDiaMin(){
            return $this->diaMin;
        }
        public function getDiaMax(){
            return $this->diaMax;
        }
    }
    
    function iniciarForm($inst, $fecha, $form, $titulo, $ubi){
        if(strcmp($ubi, "1") == 0)
            $ubicacion = "Sede";
        else if (strcmp($ubi, "2") == 0)
            $ubicacion = "Campo";
        if(strcmp($ubi, "3") == 0)
            $ubicacion = "Anexo";

        if (strcmp($inst, "pad") == 0) {
            echo ($titulo ? ('<h3>Paddle -' . $fecha . ' - ' . $ubicacion . '</h3>') : '');
            echo '<form action="' . $form . '" method="post" class="formulario grid_container tenis">';
            $esTenis=1;
        } else if (strcmp($inst, "ten")== 0) {
            $esTenis=1;
            echo ($titulo ? ('<h3>Tenis -' . $fecha . ' - ' . $ubicacion . '</h3>') : '');
            echo '<form action="' . $form . '" method="post" class="formulario grid_container tenis">';
        } else if (strcmp($inst, "golfd")== 0) {
            echo ($titulo ? ('<h3>Driving -' . $fecha . ' - ' . $ubicacion . '</h3>') : '');
            echo '<form action="' . $form . '" method="post" class="formulario grid_container golfd">';
        } else if (strcmp($inst, "golf")== 0) {
            echo ($titulo ? ('<h3>Golf -' . $fecha . ' - ' . $ubicacion . '</h3>') : '');
            echo '<form action="' . $form . '" method="post" class="formulario grid_container golf">';
        } else if (strcmp($inst, "sal")== 0) {
            echo ($titulo ? ('<h3>Salones -' . $fecha . ' - ' . $ubicacion . '</h3>') : '');
            echo '<form action="' . $form . '" method="post" class="formulario grid_container salon">';
        } else if (strcmp($inst, "gim")== 0) {
            echo ($titulo ? ('<h3>Gimansio -' . $fecha . ' - ' . $ubicacion . '</h3>') : '');
            echo '<form action="' . $form . '" method="post" class="formulario grid_container gim">';
        }else{
            header("location:./home.php");
        }
    }

    function cerrarForm(){
        echo "</form>";
    }

    function botonPulsado($texto){
        if (isset($texto['btnpad'])) {
            return "pad";
        } else if (isset($texto['btnten'])) {
            return "ten";
        } else if (isset($texto['btngolf'])) {
            return "golf";
        } else if (isset($texto['btngolfd'])) {
            return "golfd";
        } else if (isset($texto['btnsal'])) {
            return "sal";
        } else if (isset($texto['btngim'])) {
            return "gim";
        }else if (isset($texto['btnres'])){
            return $texto['btnres'];
        } else if (isset($texto['Anexo'])) {
            return "3";
        } else if (isset($texto['Campo'])) {
            return "2";
        }else if (isset($texto['Sede'])){
            return "1";
        }

    }

    function quitaEspacios($texto){
        return ( preg_replace("/[[:space:]]/", " ", trim($texto)));
    }

?>