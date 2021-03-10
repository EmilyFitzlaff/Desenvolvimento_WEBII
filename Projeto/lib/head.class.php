<?php
    class Head {
        private $elementos = array();
        
        public function addElemento($elemento) {
            $this->elementos[] = $elemento;
        }
    
        public function __toString(){
            $head = "<head>\n";
            foreach ($this->elementos as $item) {
                $head .= $item;
            }
            $head .= "</head>\n";
            return $head;
        }
    }
?>