<?php
    require_once 'aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;
        public function renovarBolsa(){
            echo "<p>Bolsa renovada!</p>";
        }
        public function setBolsa($b){
            $this->bolsa = $bolsa;
        }
        public function getBolsa(){
            return $this->bolsa;
        }
        public function pagarMensalidade(){
            echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
        }
    }