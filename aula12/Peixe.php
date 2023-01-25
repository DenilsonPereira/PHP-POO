<?php
    require_once 'Animal.php';
    class Peixe extends Animal{
        private $corEscama;
        public function locomover(){
            echo "Nadando!";
        }
        public function alimentar(){
            echo "Comendo substâncias";
        }
        public function emitirSom(){
            echo "Peixe não faz som!";
        }
        public function soltarBolha(){
            echo "Soltar uma bolha!";
        }
        public function setCorEscama($ce){
            $this->corEscama = $ce;
        }
        public function getCorEscama(){
            return $this->corEscama;
        }
    }