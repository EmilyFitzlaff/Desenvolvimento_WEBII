<?php
    class h3 {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<h3>'. $this->texto .'</h3>';
        }
    }
?>