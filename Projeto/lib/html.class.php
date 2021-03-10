<?php
    class Html{
    
        private $lang;
        private $head;
        private $body;
        
        public function __construct($lang, $head, $body) {
            $this->lang = $lang;
            $this->head = $head;
            $this->body = $body;
        }

        public function __toString(){
            $html = "<!DOCTYPE html>\n<html lang=\"{$this->lang}\">\n";                
            $html .= $this->head;
            $html .= $this->body;            
            $html .= '</html>';
            return $html;
        }    
    }
?>