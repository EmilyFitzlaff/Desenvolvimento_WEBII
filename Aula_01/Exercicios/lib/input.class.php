<?php
    class Input {
        public $type;
        public $name;
        public $id;
        public $placeholder;
        public $checked;
        public $disabled;
        public $class;
        public $required;
         
        public function __construct($type, $name, $id, $placeholder, $checked, $disabled, $class, $required) {
            $this->type = $type;
            $this->name = $name;
            $this->id = $id;
            $this->placeholder = $placeholder;
            $this->checked = $checked;
            $this->disabled = $disabled;
            $this->class = $class;
            $this->required = $required;
        }

        public function __toString() {
            $input = "<input ";

            if ($this->type != "") {
                $input .= " type='{$this->type}' ";
            }

            if ($this->name != "") {
                $input .= " name='{$this->name}' ";
            }

            if ($this->value != "") {
                $input .= " value='{$this->value}' ";
            }

            if ($this->class != "") {
                $input .= " class='{$this->class}' ";
            }

            if ($this->id != "") {
                $input .= " id='{$this->id}' ";
            }

            if ($this->placeholder != "") {
                $input .= " placeholder='{$this->placeholder}' ";
            }

            if ($this->checked != "") {
                $input .= " checked ";
            }

            if ($this->required != "") {
                $input .= " required ";
            }

            if ($this->disabled != "") {
                $input .= " disabled ";
            }

            $input .= "/>";

            return $input;
        }  
    }
?>