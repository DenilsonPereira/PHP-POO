<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;
        public function FazerAniver(){

        }
    }
    class Visitante extends Pessoa{

    }
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;
        public function PagarMensalidade(){

        }
        public function setMatricula($m){
            $this->matricula = $m;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function setCurso($c){
            $this->curso = $c;
        }
        public function getCurso(){
            return $this->curso;
        }
    }
    class Bolsista extends Aluno{
        private $bolsa;
        public function RenovarBolsa(){

        }
        public function setBolsa($b){
            $this->bolsa = $bolsa;
        }
        public function getBolsa(){
            return $this->bolsa;
        }
        //@sobrepor
        public function PagarMensalidade(){

        }
    }