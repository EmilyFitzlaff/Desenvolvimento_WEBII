<?php
    /**
     * class body 
     */
    class body {    
        private $class;
        private $elementos = array();
        
        public function __construct($class) {
            $this->class = $class;
        }
    
        public function addElemento($elemento) {
            $this->elementos[] = $elemento;
        }
    
        public function __toString(){
            $body = "<body class=\"{$this->class}\">\n";
            foreach ($this->elementos as $item) {
                $body .= $item;
            }
            $body .= "</body>\n";
            return $body;
        }
    }
?>