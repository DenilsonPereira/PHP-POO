<?php
    require_once 'pessoa.php';

    Class Funcionario extends Pessoa{
        //Atributos
        private $setor;
        private $trabalhando;
        //Métodos
        public function mudarTrabalho(){
            $this->trabalhando =! $this->trabalhando;
        }
        //Métodos Especiais
        public function setSetor($set){
            $this->setor = $set;
        }
        public function getSetor(){
            return $this->setor;
        }
        public function setTrabalhando($t){
            $this->trabalhando = $t;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }
    }