<?php
    class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setExperiencia($experiencia){
            $this->experiencia = $experiencia;
        }
        public function getExperiencia(){
            return $this->experiencia;
        }
        protected function GanharExp(){

        }
    }