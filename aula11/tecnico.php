<?php
    require_once 'aluno.php';
    class Tecnico extends Aluno{
        private $registroProfissional;
        public function praticar(){
            echo "<p>O(a) estudante $this->nome está colocando em prática o que foi aprendido</p>";
        }
        public function setRegistroProfissional($r){
            $this->registroProfissional = $r;
        }
        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }
    }