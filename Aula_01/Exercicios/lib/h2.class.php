<?php
    class h2 {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<h2>'. $this->texto .'</h2>';
        }
    }
?>