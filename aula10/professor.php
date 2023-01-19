<?php
    require_once 'pessoa.php';

    Class Professor extends Pessoa{
        //Atributos
        private $especialidade;
        private $salario;
        //Métodos
        public function receberAum($aum){
            $this->salario += $aum;
        }
        //Métodos Especiais
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