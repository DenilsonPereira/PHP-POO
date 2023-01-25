<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        public final function fazerAniver(){
            $this->idade ++;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }
        public function getSexo(){
            return $this->sexo;
        }
    }