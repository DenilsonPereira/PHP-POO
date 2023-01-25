<?php
    require_once 'Animal.php';
    class Mamifero extends Animal{
        private $corPelo;
        public function locomover(){
            echo "Correndo!";
        }
        public function alimentar(){
            echo "Mamando!";
        }
        public function emitirSom(){
            echo "Som de Mamífero!";
        }
        public function setCorPelo($cp){
            $this->corPelo = $cp;
        }
        public function getCorPelo(){
            return $this->corPelo;
        }
    }