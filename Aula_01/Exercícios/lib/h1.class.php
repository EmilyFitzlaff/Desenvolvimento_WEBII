<?php
    class h1 {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<h1>'. $this->texto .'</h1>';
        }
    }
?>