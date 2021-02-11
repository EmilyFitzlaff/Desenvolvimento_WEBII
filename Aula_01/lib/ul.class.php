<?php
    class Ul {
        private $lista = array();

        function addLi($pLi) {
            $this->lista[] = $pLi;
        }

        function __toString() {
            $vUl = '<ul>';
            foreach ($this->lista as $valor) {
                $vUl .= $valor;
            }
            $vUl .= '</ul>';

            return $vUl;
        }
    }
?>