<?php
    class h4 {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<h4>'. $this->texto .'</h4>';
        }
    }
?>