<?php

    Class Legend {
        private $texto;

        public function __construct($texto) {
            $this->texto;   
        }

        public function __toString() {
            $legend = "<legend>{$this->texto}</legend>";
            return $legend;
        }
    }

?>