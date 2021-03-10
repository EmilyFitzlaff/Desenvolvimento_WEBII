<?php
    Class Label {
        private $id;
        private $texto;
        private $class;

        public function __construct($id, $texto, $class) {
            $this->id = $id;
            $this->texto = $texto;
            $this->class = $class;
        }

        public function __toString() {
            $label = "<label ";

            if ($this->id != '') {
                $label .= " id='{$this->id}' ";
            }

            if ($this->class != '') {
                $label .= " class='{$this->class}' ";
            }

            $label .= ">";

            if ($this->texto != '') {
                $label .= " {$this->texto} ";
            }  

            $label .= "</label>";

            return $label;
        }
    }
?>