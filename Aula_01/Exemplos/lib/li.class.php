<?php
    class Li {
        private $texto;
        private $class;

        function __construct($texto, $class) {
            $this->texto = $texto;
            $this->class = $class;
        }

        function __toString() {
            return '<li class='. $this->class .'>'. $this->texto .'</li>';
        }
    }
?>