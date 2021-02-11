<?php
    class Meta {
        private $charset;
        private $name;
        private $content;

        function getCharset() {
            return $this->charset;
        }

        function setCharset($charset) {
            $this->charset = $charset;
        }

        function getName() {
            return $this->name;
        }

        function setName($name) {
            $this->name = $name;
        }

        function getContent() {
            return $this->content;
        }

        function setContent($content) {
            $this->content = $content;
        }

        function getMetaCharset() {
            return '<meta charset='. $this->charset .'>';
        }

        function getViewport() {
            return '<meta name='. $this->name .' content='. $this->content.'>';
        }
    }
?>