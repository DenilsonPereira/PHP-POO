<?php
    require_once 'publicacao.php';

    class Pessoa{
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Metodos Especiais
        public function __construct($n, $i, $s){
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
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

        //Metodos
        public function fazerAniver(){
            $this->idade ++;
        }
    }