<?php
    class Visualizacao{
        private $espectador;
        private $filme;

        public function setEspectador($espectador){
            $this->espectador = $espectador;
        }
        public function getEspectador(){
            return $this->espectador;
        }
        public function setFilme($filme){
            $this->filme = $filme;
        }
        public function getFilme(){
            return $this->filme;
        }
        public function avaliar(){

        }
        public function avaliar($nota){

        }
        public function avaliar($porc){

        }
    }