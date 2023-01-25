<?php
    require_once 'pessoa.php';
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;
        public function receberAumento(){
            echo "<p>$this->nome, recebeu um aumento!</p>";
        }
        public function setEspecialidade($e){
            $this->especialidade = $e;
        }
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setSalario($sal){
            $this->salario = $sal;
        }
        public function getSalario(){
            return $this->salario;
        }
    }