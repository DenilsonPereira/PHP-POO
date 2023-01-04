<?php
    class ContaBanco{
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Metodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            
            if($t == "CC"){
                $this->setSaldo(50);
            }
            elseif($t == "CP"){
                $this->setSaldo(150);
            }
        }
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta com dinheiro</p>";
            }
            elseif($this->getSaldo() < 0){
                echo "<p>Conta em débito</p>";
            }
            else{
                $this->setStatus(false);
                echo "<p>Conta de ". $this->getDono()." fechada com sucesso!</p>";
            }
        }
        public function depositar($v){
            if($this->status){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Deposito de R$ $v na conta de ".$this->getDono()."</p>";
            }
            else{
                echo "<p>Impossível depositar</p>";
            }
        }
        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$$v autorizado na conta de ". $this->getDono()."</p>";
                }
                else{
                    echo "<p>Saldo insuficiente</p>";
                    
                }
            }
            else{
                echo "<p>Impossivel sacar</p>";
            }
        }
        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $v=12;
            }
            else if($this->getTipo() == "CP"){
                $v = 20;
            }

            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$$v debitada da conta de ".$this->getDono()."</p>";
            }
            else{
                echo "<p>Problemas com a conta, não possivel cobrar!</p>";
            }
        }
        
        //Metodos Especiais
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }
        public function setNumConta($n){
            $this->numConta = $n;
        }
        public function getNumConta(){
            return $this->numConta;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setDono($d){
            $this->dono = $d;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setStatus($s){
            $this->status = $s;
        }
        public function getStatus(){
            return $this->status;
        }
        
    }