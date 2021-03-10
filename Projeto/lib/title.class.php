<?php
    class Title {
        private $texto;
  
        function __construct($texto) {
            $this->texto = $texto;
        }

        function __toString() {
            return '<title>'. $this->texto .'</title>';
        }
    }
?>