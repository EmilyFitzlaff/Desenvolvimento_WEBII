<?php

    class Link {
        private $url;
        private $rel;
        private $integrity;
        private $crossorigin;

        function __construct($url, $rel, $integrity, $crossorigin) {
            $this->url = $url;
            $this->rel = $rel;
            $this->integrity = $integrity;
            $this->crossorigin = $crossorigin;
        }

        function __toString() {
            return '<link href="'. $this->url .'" rel="'. $this->rel .'" integrity="'. $this->integrity .'" crossorigin="'. $this->crossorigin.'">';
        }
    }
?>