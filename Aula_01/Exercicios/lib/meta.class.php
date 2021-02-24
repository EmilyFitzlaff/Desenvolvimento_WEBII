<?php
    class Meta {
        private $charset;
        private $name;
        private $content;

        function __construct($charset, $name, $content) {
            $this->charset = $charset;
            $this->name = $name;
            $this->content = $content;
        }

        function __toString() {
            $meta = "<meta ";

            if ($this->charset != '') {
                $meta .= "charset='{$this->charset}'";
            }

            if ($this->name != '') {
                $meta .= "name='{$this->name}'";
            }

            if ($this->content != '') {
                $meta .= "content='{$this->content}'";
            }

            $meta .= "/>";

            return $meta;
        }

    }
?>