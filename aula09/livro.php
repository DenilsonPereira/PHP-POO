<?php
    require_once 'publicacao.php';
    require_once 'pessoa.php';

    class Livro implements Publicacao{
        //Atributos
        private $titulo;
        private $autor;
        private $totPag;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //Metodos Especiais
        public function __construct($ti, $au, $to, $le){
            $this->titulo = $ti;
            $this->autor = $au;
            $this->totPag = $to;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $le;
        }
        public function setTitulo($ti){
            $this->titulo = $ti;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function setAutor($au){
            $this->autor = $au;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function setTotPag($to){
            $this->totPag = $to;
        }
        public function getTotPag(){
            return $this->totPag;
        }
        public function setPagAtual($pa){
            $this->pagAtual = $pa;
        }
        public function getPagAtual(){
            return $this->pagAtual;
        }
        public function setAberto($ab){
            $this->aberto = $ab;
        }
        public function getAberto(){
            return $this->aberto;
        }
        public function setLeitor($le){
            $this->leitor = $le;
        }
        public function getLeitor(){
            return $this->leitor;
        }

        //Metodos
        public function detalhes(){
            echo "<hr>Livro <strong>".$this->titulo."</strong>, escrito por <em>".$this->autor."</em>";
            echo "<br>Páginas: <mark>".$this->totPag."</mark>, atual página: <mark>".$this->pagAtual."</mark>";
            echo "<br>Sendo lido por: <strong>".$this->leitor->getNome()."</strong><br>";
        }
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($p){
            if($p>$this->totPag){
                $this->pagAtual = 0;
            }
            else{
                $this->pagAtual = $p;
            }
        }
        public function avancarPag(){
            if($this->pagAtual===$this->totPag){
                $this->totPag;
            }
            else{
                $this->pagAtual ++;
            }
        }
        public function voltarPag(){
            if($this->pagAtual === 0){
                $this->pagAtual = 0;
            }
            else{
                $this->pagAtual --;
            }
        }
    }