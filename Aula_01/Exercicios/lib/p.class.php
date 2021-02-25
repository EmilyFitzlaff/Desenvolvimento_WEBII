<?php

    Class P {
        private $texto;
        private $class;
        private $id;

        public function __construct($texto, $class, $id) {
            $this->texto = $texto;
            $this->class = $class;
            $this->id = $id;
        }

        public function __toString() {
            $p = "<p ";

            if ($this->class != '') {
                $p .= " class='{$this->class}' ";
            }

            if ($this->id != '') {
                $p .= " id='{$this->id}' ";
            }

            $p .= ">";

            if ($this->texto != '') {
                $p .= "{$this->texto}";
            }

            $p .= "</p>";

            return $p;
            
        }
    }

?>