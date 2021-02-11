<?php
    spl_autoload_register(function ($class) {
        $arquivo = $_SERVER["DOCUMENT_ROOT"]."/Desenvolvimento_WEBII/Aula_01/lib/".$class.".class.php";

        if(file_exists($arquivo)) {
            require $arquivo;
        }
    });
?>