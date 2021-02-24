<?php

    Class Button {
        private $type;
        private $name;
        private $value;
        private $class;
        private $id;
        private $texto;

        public function __construct($type, $name, $value, $class, $id, $texto) {
            $this->type = $type;
            $this->name = $name;
            $this->value = $value;
            $this->class = $class;
            $this->id = $id;
            $this->texto = $texto;
        }

        public function __toString() {
            $button = "<button ";

            if ($this->type != "") {
                $button .= " type='{$this->type}' ";
            }

            if ($this->name != "") {
                $button .= " name='{$this->name}' ";
            }

            if ($this->value != "") {
                $button .= " value='{$this->value}' ";
            }

            if ($this->class != "") {
                $button .= " class='{$this->class}' ";
            }

            if ($this->id != "") {
                $button .= " id='{$this->id}' ";
            }

            $button .= ">";

            if ($this->texto != "") {
                $button .= " {$this->texto} ";
            }

            $button .= "</button>";

            return $button;
        }
    }

?>