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
            return '<input type ="'. $type .'" 
                           name ="'. $name .'"
                           id ="'. $id .'"
                           checked ="'. $checked .'"
                           disabled ="'. $disabled .'"
                           class ="'. $class .'"
                           required ="'. $required .'"
                           placeholder ="'. $placeholder .'">';   
        }
    }
?>