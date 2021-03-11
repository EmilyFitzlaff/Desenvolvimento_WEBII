<?php

    include_once('lib/autoload.php');

    /**
     * Head
     */
    $metaCharset = new Meta("UTF-8", "", "");
    $metaViewport = new Meta("", "viewport", "width=device-width, initial-scale=1");

    $title = new Title("Página Inicial");

    $link = new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous");

    $head = new Head();
    $elementosHead = array($metaCharset, $metaViewport, $title, $link);
    $head->addElemento($elementosHead);
    echo $head;

    /**
     * Body
     */
    $h1 = new H("Hello, World!", "1", "");

    $titleCardHeader = new P("Login", "", "");
    $divCardHeader = new Div("card-header", "");
    $divCardHeader->addElemento($titleCardHeader);

    


    $divCard = new Div("card", "");
    $divCard->addElemento($divCardHeader);

    $divContainer = new Div("container", "");
    
    

    
    
    $body = new Body("");
    $body->addElemento($div);
    echo $body;
?>


<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
