<?php
    class h5 {
        private $texto;

        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<h5>'. $this->texto .'</h5>';
        }
    }
?>