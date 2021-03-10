<?php

    Class Select {
        private $name;
        private $id;
        private $listaOpcoes = array();

        public function __construct($name, $id) {
            $this->name = $name;
            $this->id = $id;
        }

        public function addOption($lista) {
            $this->listaOpcoes = $lista;
        }

        public function __toString() {
            $select = "<select id='{$this->id}' name='{$this->name}'>";
            foreach($this->listaOpcoes as $opcao) {
                $select .= $opcao;
            }
            $select .= "</select>";

            return $select;
        }
    }
    
?>