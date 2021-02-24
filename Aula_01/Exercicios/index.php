<?php
    require_once('lib/autoload.php');

    $html = new html();
    echo $html->abertura();

    $head = new head();
    echo $head->abertura();

    $meta = new Meta("UTF-8", "", "");
    echo $meta;

    $title = new Title("Hello, World!");
    echo $title;
    
    echo $head->fechamento();
    
    $body = new body();
    echo $body->abertura();

    $script = new Script("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js",
                        "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0",
                        "anonymous");
    echo $script;
    
    echo $head->fechamento();

    echo $html->fechamento();

    $h1 = new H("Teste", "1");
    echo $h1;

    $button = new Button("submit", "enviar", "enviar", "qualquer", "idqualquer", "Emily");
    echo $button;
?>