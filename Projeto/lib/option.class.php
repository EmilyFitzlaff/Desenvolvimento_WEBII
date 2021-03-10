<?php

    Class Option {
        private $value;
        private $texto;

        public function __construct($value, $texto) {
            $this->value = $value;
            $this->texto = $texto;
        }

        public function __toString() {
            $option = "<option value='{$this->value}'> {$this->texto} </option>";
            return $option;
        }
    }

?>