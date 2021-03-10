<?php

    class Link {
        private $url;
        private $rel;
        private $integrity;
        private $crossorigin;

        function __construct($url, $rel, $integrity, $crossorigin) {
            $this->url = $url;
            $this->rel = $rel;
            $this->integrity = $integrity;
            $this->crossorigin = $crossorigin;
        }

        function __toString() {
            $link = "<link ";

            if ($this->url != "") {
                $link .= " href='{$this->url}' ";
            }

            if ($this->rel != "") {
                $link .= " rel='{$this->rel}' ";
            }

            if ($this->integrity != "") {
                $link .= " integrity='{$this->integrity}' ";
            }

            if ($this->crossorigin != "") {
                $link .= " crossorigin='{$this->crossorigin}' ";
            }

            $link .= "/>\n";

            return $link;
        }
    }
?>