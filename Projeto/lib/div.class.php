<?php
    class Div {
        private $class;
        private $id;
        private $elementos = array();

        function __construct($class, $id) {
            $this->class = $class;
            $this->id = $id;
        }

        public function addArrayElementos($aElementos) {
            foreach ($aElementos as $item) {
                $this->elementos[] = $item;
            }            
        }

        public function addElemento($elemento) {
            $this->elementos[] = $elemento;
        }

        function __toString() {
            $div = "<div";

            if ($this->class != '') {
                $div .= " class='{$this->class}' ";
            }

            if ($this->id != '') {
                $div .= " id='{$this->id}' ";
            }

            $div .= ">\n";

            foreach ($this->elementos as $item) {
                $div .= $item;
            }

            $div .= "</div>\n";

            return $div;
        }

    }
?>