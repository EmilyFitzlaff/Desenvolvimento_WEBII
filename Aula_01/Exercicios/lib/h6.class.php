<?php
    class h6 {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<h6>'. $this->texto .'</h6>';
        }
    }
?>