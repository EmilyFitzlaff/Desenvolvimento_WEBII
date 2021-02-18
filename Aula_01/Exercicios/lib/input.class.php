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
            return '<input type ="'. $this->type .'" 
                           name ="'. $this->name .'"
                           id ="'. $this->id .'"
                           checked ="'. $this->checked .'"
                           disabled ="'. $this->disabled .'"
                           class ="'. $this->class .'"
                           required ="'. $this->required .'"
                           placeholder ="'. $this->placeholder .'">'; 
        }  
    }
?>