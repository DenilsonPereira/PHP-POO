<?php
    require_once 'interface.php';
    class Video extends AcoesVideo{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        
        public function setTitulo($t){
            $this->titulo = $t;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function setAvaliacao($a){
            $this->avaliacao = $a;
        }
        public function getAvaliacao(){
            return $this->avaliacao;
        }
        public function setViews($v){
            $this->views = $v;
        }
        public function getViews(){
            return $this->views;
        }
        public function setCurtidas($c){
            $this->curtidas = $c;
        }
        public function getCurtidas(){
            return $this->curtidas;
        }
        public function setReproduzindo($r){
            $this->reproduzindo = $r;
        }
        public function getReproduzindo(){
            return $this->reproduzindo;
        }
        public function Play(){
            
        }
        public function Pause(){
            
        }
        public function Like(){
            
        }
    }