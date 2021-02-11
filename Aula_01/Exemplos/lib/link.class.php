<?php
    class link {
        private $url;
        private $txt; 
        private $target; 
        private $class;

        function __construct($url, $txt, $target, $class) {
            $this->url = $url;
            $this->txt = $txt;
            $this->target = $target;
            $this->class = $class;
        }

        /**
         * este método gera tudo como string
         */
        public function __toString(){
            return '<a href="'. $this->url .'" target="'. $this->target .'" class="'. $this->class .'">' . $this->txt . '</a>';
        }
    }
?>