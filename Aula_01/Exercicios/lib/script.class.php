<?php

    class Script {
        private $src;
        private $integrity;
        private $crossorigin;

        function __construct($src, $integrity, $crossorigin) {
            $this->src = $src;
            $this->integrity = $integrity;
            $this->crossorigin = $crossorigin;
        }

        function __toString() {
            $script = "<script ";

            if ($this->src != "") {
                $script .= " src='{$this->src}' ";
            }

            if ($this->integrity != "") {
                $script .= " integrity='{$this->integrity}' ";
            }

            if ($this->crossorigin != "") {
                $script .= " crossorigin='{$this->crossorigin}' ";
            }
            
            $script .= "></script>";
        }
    }

?>