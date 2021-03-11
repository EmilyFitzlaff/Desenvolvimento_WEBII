<?php
    class h {
        private $texto;
        private $nivel;
        private $class;

        function __construct($texto, $nivel, $class) {
            $this->texto = $texto;
            $this->nivel = $nivel;
            $this->class = $class;
        }

        function __toString() {
            return "<h{$this->nivel} class='{$this->class}'>{$this->texto}</h{$this->nivel}>\n";
        }
    }
?>