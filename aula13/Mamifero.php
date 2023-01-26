<?php
    require_once 'Animal.php';
    class Mamifero extends Animal{
        protected $corPelo;
        public function emitirSom(){
            echo "<p>Som de Mamífero</p>";
        }
        public function setCorPelo($cp){
            $this->corPelo = $cp;
        }
        public function getCorPelo(){
            return $this->corPelo;
        }
    }
