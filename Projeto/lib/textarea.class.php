<?php

    Class Textarea {
        private $cols;
        private $rows;
        private $texto;
        private $id;
        private $class;
        private $name;

        public function __construct($texto, $id, $name, $class, $cols, $rows) {
            $this->cols = $cols;
            $this->rows = $rows;
            $this->id = $id;
            $this->name = $name;
            $this->class = $class;
            $this->texto = $texto;
        }

        public function __toString() {
            $textarea = "<textarea ";

            if ($this->cols != "") {
                $textarea .= " cols='{$this->cols}' ";
            }

            if ($this->rows != "") {
                $textarea .= " rows='{$this->rows}' ";
            }

            if ($this->id != "") {
                $textarea .= " id='{$this->id}' ";
            }

            if ($this->class != "") {
                $textarea .= " class='{$this->class}' ";
            }

            if ($this->name != "") {
                $textarea .= " name='{$this->name}' ";
            }

            $textarea .= ">";

            if ($this->texto != "") {
                $textarea .= " {$this->texto} ";
            }

            $textarea .= "</textarea>";
        }
    }

?>