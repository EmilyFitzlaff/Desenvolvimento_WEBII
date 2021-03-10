<?php
    
    Class Fieldset {
        private $class;
        private $id;
        private $lista = array();

        public function __construct($class, $id) {
            $this->class = $class;
            $this->id = $id;
        }

        public function Abertura() {
            $abertura = "<fieldset class='{$this->class}' id='{$this->id}'>";
            return $abertura;
        }

        
        public function Fechamento() {
            $fechamento = "</fieldset>";
            return $fechamento;
        }

        public function addItens($array) {
            $this->lista = $array;
        }

        public function __toString() {
            $itens = $this->Abertura();
            foreach ($this->lista as $objeto) {
                $itens .= $objeto;
            }
            $itens .= $this->Fechamento();
            return $itens;
        }
    }

?>