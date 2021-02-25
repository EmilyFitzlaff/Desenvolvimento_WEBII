<?php
    
    Class Fieldset {
        private $class;
        private $id;

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
    }

?>