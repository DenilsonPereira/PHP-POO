<?php
    require_once 'lutador.php';
    class Luta{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos
        public function marcarLuta($l1, $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }
            else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        public function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0: //Empate
                        echo "<p>Empatou!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: //Ganhou Desafiado
                        echo "<p>".$this->desafiado->getNome()." venceu!</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: //Ganhou Desafiante
                        echo "<p>".$this->desafiante->getNome()." venceu!</p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }
            }
            else{
                echo "<p>Luta não pode acontecer!</p>";
            }
        }
        //Métodos Especiais
        public function setDesafiado($dd){
            $this->desafiado = $dd;
        }
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiante($df){
            $this->desafiante = $df;
        }
        public function getDesafiante(){
            return $this->desafiante;
        }
        public function setRounds($r){
            $this->rounds = $r;
        }
        public function getRounds(){
            return $this->rounds;
        }
        public function setAprovada($ap){
            $this->aprovada = $ap;
        }
        public function getAprovada(){
            return $this->aprovada;
        }
    }