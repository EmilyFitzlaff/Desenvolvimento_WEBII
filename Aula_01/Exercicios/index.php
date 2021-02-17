<?php
    require_once('lib/autoload.php');

    $html = new html();
    echo $html->abertura();

    $head = new head();
    echo $head->abertura();

    $metaUTF8 = new Meta();
    $metaUTF8->setCharset('utf-8');
    echo $metaUTF8->getMetaCharset();

    $metaViewport = new Meta();
    $metaViewport->setContent('width=device-width, initial-scale=1');
    $metaViewport->setName('viewport');
    echo $metaViewport->getViewport();

    $title = new Title("Hello, World!");
    echo $title;
    
    echo $head->fechamento();
    
    $body = new body();
    echo $body->abertura();

    echo $h1 = new H1("Hello, World!");

    $script = new Script("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js",
                        "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0",
                        "anonymous");
    echo $script;
    
    echo $head->fechamento();

    echo $html->fechamento();
?>