<?php
    class h {
        private $texto;
        private $nivel;

        function __construct($texto, $nivel) {
            $this->texto = $texto;
            $this->nivel = $nivel;
        }

        function __toString() {
            return "<h{$this->nivel}>{$this->texto}</h{$this->nivel}>";
        }
    }
?>