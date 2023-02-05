<?php
    require_once 'pessoa.php';
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;

        public function setLogin($login){
            $this->login = $login;
        }
        public function getLogin(){
            return $this->login;
        }
        public function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }
        public function getTotAssistido(){
            return $this->totAssistido;
        }
        public function ViuMaisUm(){
            $this->totAssistido ++;
        }
    }