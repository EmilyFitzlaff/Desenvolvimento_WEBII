<?php

    class Script {
        private $src;
        private $integrity;
        private $crossorigin;

        function __construct($src, $integrity, $crossorigin) {
            $this->src = $src;
            $this->integrity = $integrity;
            $this->crossorigin = $crossorigin;
        }

        function __toString() {
            return '<script src="'. $this->src .' 
                            integrity="'. $this->integrity .'" 
                            crossorigin="'. $this->crossorigin.'"></script>';

        }
    }

?>