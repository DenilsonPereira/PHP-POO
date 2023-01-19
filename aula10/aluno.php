<?php
    require_once 'pessoa.php';

    Class Aluno extends Pessoa{
        //Atributos
        private $matr;
        private $curso;
        //Métodos
        public function cancelarMatr(){
            echo "<p>Matrícula será cancelada!</p>";
        }
        //Métodos Especiais
        public function setMatr($m){
            $this->matr = $m;
        }
        public function getMatr(){
            return $this->matr;
        }
        public function setCurso($c){
            $this->curso = $c;
        }
        public function getCurso(){
            return $this->curso;
        }
    }